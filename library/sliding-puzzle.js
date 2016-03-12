$(function () {
    //Definición de variables
    var numberOfPieces = 12,
        aspect = "3:4",
        aspectW = parseInt(aspect.split(":")[0]),
        aspectH = parseInt(aspect.split(":")[1]),
        container = $("#puzzle"),
        imgContainer = container.find("figure"),
        img = imgContainer.find("img"),
        path = img.attr("src"),
        piece = $("<div/>"),
        pieceW = Math.floor(img.width() / aspectW),
        pieceH = Math.floor(img.height() / aspectH),
        idCounter = 0,
        positions = [],
        empty = {
            top: 0,
            left: 0,
            bottom: pieceH,
            right: pieceW
        },
        previous = {},
        timer,
        currentTime = {},
        timerDisplay = container.find("#time").find("span");

    //División de la imagen en piezas para hacer un puzle.
    for (var x = 0, y = aspectH; x < y; x++) {
        for (var a = 0, b = aspectW; a < b; a++) {
            var top = pieceH * x,
                left = pieceW * a;

            piece.clone().attr("id", idCounter++).css({
                width: pieceW,
                height: pieceH,
                position: "absolute",
                top: top,
                left: left,
                backgroundImage: ["url(", path, ")"].join(""),
                backgroundPosition: ["-", pieceW * a, "px ", "-", pieceH * x, "px"].join("")
            }).appendTo(imgContainer);

            //almacenamos las posiciones:
            positions.push({ top: top, left: left });
        }
    }

	//ahora eliminamos la imagen original:
    img.remove();
	//Y eliminamos la primera pieza del puzle:
    container.find("#0").remove();
	//También eliminamos el primer elemento del array:
    positions.shift();

	//activamos el botón para empezar:
    $("#start").on("click", function (e) {

        //en la siguiente función, para barajar cartas,
		//usamos un patrón de diseño típico para este
		//tipo de situaciones, siempre con arrays:	
        var pieces = imgContainer.children();

        function shuffle(array) {
            var i = array.length;
            if (i === 0) {
                return false;
            }
            while (--i) {
                var j = Math.floor(Math.random() * (i + 1)),
                    tempi = array[i],
                    tempj = array[j];

                array[i] = tempj;
                array[j] = tempi;
            }
        }

        shuffle(pieces);

        //posicionando las piezas:
        $.each(pieces, function (i) {
            pieces.eq(i).css(positions[i]);
        });

        //se reemplazan las piezas existentes por las que acabamos de barajar.
        pieces.appendTo(imgContainer);

        //aseguramos que el espacio en blanco, al empezar, sea el de la esquina superior izquierda.
        empty.top = 0;
        empty.left = 0;

        //eliminamos mensajes anteriores:
        container.find("#ui").find("p").not("#time").remove();

        //eliminamos el tiempo anterior:
        if (timer) {
            clearInterval(timer);
            timerDisplay.text("00:00:00");
        }

        //iniciampos el tempo:
        timer = setInterval(updatetime, 1000);
        currentTime.seconds = 0;
        currentTime.minutes = 0;
        currentTime.hours = 0;

        //actualizamos el display del tempo:
        function updatetime() {

            //paramos el timer si lleva 24h:
            if (currentTime.hours === 23 && currentTime.minutes === 59 && currentTime.seconds === 59) {
                clearinterval(timer);
            } else if (currentTime.minutes === 59 && currentTime.seconds === 59) {
                //incremento de horas si conviene:
                currentTime.hours++;
                currentTime.minutes = 0;
                currentTime.seconds = 0;
            } else if (currentTime.seconds === 59) {
                //incremento de minutos si conviene:
                currentTime.minutes++;
                currentTime.seconds = 0;
            } else {
                //incremento de segundos:
                currentTime.seconds++;
            }

            //construimos la cadena del tempo:
            newHours = (currentTime.hours <= 9) ? "0" + currentTime.hours : currentTime.hours;
            newMins = (currentTime.minutes <= 9) ? "0" + currentTime.minutes : currentTime.minutes;
            newSecs = (currentTime.seconds <= 9) ? "0" + currentTime.seconds : currentTime.seconds;

            //actualizamos el display:
            timerDisplay.text([newHours, ":", newMins, ":", newSecs].join(""));
        }

        //hacemos que las piezas sean arrastrables, mediante jQuery UI:
        pieces.draggable({
            containment: "parent",
            grid: [pieceW, pieceH],
            start: function (e, ui) {

                var current = getPosition(ui.helper);

                //disponemos el axis dependiendo de la localización relativa al espacio en blanco:
                if (current.left === empty.left) {
                    ui.helper.draggable("option", "axis", "y");
                } else if (current.top === empty.top) {
                    ui.helper.draggable("option", "axis", "x");
                } else {
                    ui.helper.trigger("mouseup");
                    return false;
                }

                //Prevenimos el arrastre si no hay espacio en blanco adyacente:
                if (current.bottom < empty.top || current.top > empty.bottom || current.left > empty.right || current.right < empty.left) {
                    ui.helper.trigger("mouseup");
                    return false;
                }

                //recordamos posición actual:
                previous.top = current.top;
                previous.left = current.left;

            },
            drag: function (e, ui) {

                var current = getPosition(ui.helper);

                //paramos el arrastre si cubrimos el espacio en blanco:
                if (current.top === empty.top && current.left === empty.left) {
                    ui.helper.trigger("mouseup");
                    return false;
                }

                //paramos el arrastre si nos movemos más allá del espacio en blanco:
                if (current.top > empty.bottom || current.bottom < empty.top || current.left > empty.right || current.right < empty.left) {
                    ui.helper.trigger("mouseup").css({
                        top: previous.top,
                        left: previous.left
                    });
                    return false;
                }
            },
            stop: function (e, ui) {
                var current = getPosition(ui.helper),
                    correctPieces = 0;

                //movemos el espacio en blanco si éste ha sido ocupado:
                if (current.top === empty.top && current.left === empty.left) {
                    empty.top = previous.top;
                    empty.left = previous.left;
                    empty.bottom = previous.top + pieceH;
                    empty.right = previous.left + pieceW;
                }

                //obtenemos la posición de todas las piezas:
                $.each(positions, function (i) {

                    var currentPiece = $("#" + (i + 1)),
                        currentPosition = getPosition(currentPiece);

                    //está la pieza actual en su correcto lugar?
                    if (positions[i].top === currentPosition.top && positions[i].left === currentPosition.left) {
                        correctPieces++;
                    }
                });

                //fin del juego
                if (correctPieces === positions.length) {

                    //paramos timer
                    clearInterval(timer);

                    //mostramos mensaje
                    $("<p/>", {
                        text: "Congratulations, you solved the puzzle!"
                    }).appendTo("#ui");

                    //convertimos el tiempo a segundos:
                    var totalSeconds = (currentTime.hours * 60 * 60) + (currentTime.minutes * 60) + currentTime.seconds;

                    //hay algún mejor tiempo almacenado?
                    if (localStorage.getItem("puzzlebesttime")) {
                        var bestTime = localStorage.getItem("puzzlebesttime");

                        if (totalSeconds < bestTime) {
                            //almacenamos el nuevo mejor tiempo:
                            localStorage.setItem("puzzlebesttime", totalSeconds);

                            $("<p/>", {
                                text: "you got a new best time!"
                            }).appendTo("#ui");
                        }
                    } else {
                        //almacenamos el tiempo actual:
                        localStorage.setItem("puzzlebesttime", totalSeconds);

                        //mostramos otro mensaje:
                        $("<p/>", {
                            text: "You got a new best time!"
                        }).appendTo("#ui");
                    }
                }
            }
        });

        //helper para generar la posición:
        function getPosition(el) {
            return {
                top: parseInt(el.css("top")),
                bottom: parseInt(el.css("top")) + pieceH,
                left: parseInt(el.css("left")),
                right: parseInt(el.css("left")) + pieceW
            }
        }
    });
});