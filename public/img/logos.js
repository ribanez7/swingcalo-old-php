function iniciar() {
    var canvas = document.getElementById("swingcalo");
    var ctx = canvas.getContext("2d");
    draw(ctx);
}

function draw(ctx) {
  // capa1/Trazado
  ctx.save();
  ctx.beginPath();
  ctx.moveTo(380.5, 25.1);
  ctx.lineTo(284.6, 121.0);
  ctx.lineWidth = 1.5;
  ctx.stroke();

  // capa1/Trazado
  ctx.beginPath();
  ctx.moveTo(374.3, 19.0);
  ctx.lineTo(278.4, 114.8);
  ctx.stroke();

  // capa1/Trazado
  ctx.beginPath();
  ctx.moveTo(367.7, 12.4);
  ctx.lineTo(271.8, 108.2);
  ctx.stroke();

  // capa1/Trazado
  ctx.beginPath();
  ctx.moveTo(361.7, 6.4);
  ctx.lineTo(265.9, 102.3);
  ctx.stroke();

  // capa1/Trazado
  ctx.beginPath();
  ctx.moveTo(355.9, 0.5);
  ctx.lineTo(260.0, 96.4);
  ctx.stroke();

  // capa1/Grupo

  // capa1/Grupo/Trazado compuesto
  ctx.save();
  ctx.beginPath();

  // capa1/Grupo/Trazado compuesto/Trazado
  ctx.moveTo(0.3, 85.6);
  ctx.lineTo(3.2, 85.6);
  ctx.bezierCurveTo(7.6, 85.6, 10.9, 85.1, 13.1, 84.1);
  ctx.bezierCurveTo(16.2, 82.6, 17.8, 79.8, 17.8, 75.7);
  ctx.bezierCurveTo(17.8, 72.2, 16.5, 68.1, 13.9, 63.3);
  ctx.bezierCurveTo(11.3, 58.4, 8.8, 53.7, 6.3, 49.2);
  ctx.bezierCurveTo(3.5, 43.9, 2.2, 39.4, 2.2, 36.0);
  ctx.bezierCurveTo(2.2, 31.8, 3.5, 28.7, 6.2, 26.5);
  ctx.bezierCurveTo(8.9, 24.4, 12.4, 23.3, 16.7, 23.3);
  ctx.lineTo(20.3, 23.3);
  ctx.lineTo(20.3, 28.2);
  ctx.bezierCurveTo(16.1, 28.2, 13.2, 28.4, 11.6, 29.0);
  ctx.bezierCurveTo(8.6, 30.0, 7.1, 32.3, 7.1, 35.8);
  ctx.bezierCurveTo(7.1, 39.2, 8.5, 43.5, 11.1, 48.6);
  ctx.bezierCurveTo(13.6, 53.1, 16.2, 57.7, 18.8, 62.5);
  ctx.bezierCurveTo(21.3, 67.4, 22.6, 71.7, 22.6, 75.6);
  ctx.bezierCurveTo(22.6, 80.4, 21.0, 84.1, 17.9, 86.7);
  ctx.bezierCurveTo(14.7, 89.3, 10.6, 90.6, 5.6, 90.6);
  ctx.lineTo(0.3, 90.6);
  ctx.lineTo(0.3, 85.6);
  ctx.closePath();
  ctx.fillStyle = "#62142c";
  ctx.fill();
  ctx.lineWidth = 0.3;
  ctx.stroke();

  // capa1/Grupo/Trazado compuesto
  ctx.beginPath();

  // capa1/Grupo/Trazado compuesto/Trazado
  ctx.moveTo(24.1, 23.3);
  ctx.lineTo(29.1, 23.3);
  ctx.lineTo(37.8, 69.3);
  ctx.lineTo(48.3, 22.7);
  ctx.lineTo(59.1, 69.1);
  ctx.lineTo(67.6, 23.3);
  ctx.lineTo(72.8, 23.3);
  ctx.lineTo(59.5, 92.0);
  ctx.lineTo(48.4, 44.1);
  ctx.lineTo(37.3, 92.0);
  ctx.lineTo(24.1, 23.3);
  ctx.closePath();
  ctx.fill();
  ctx.stroke();

  // capa1/Grupo/Trazado compuesto
  ctx.beginPath();

  // capa1/Grupo/Trazado compuesto/Trazado
  ctx.moveTo(78.2, 90.6);
  ctx.lineTo(78.2, 23.3);
  ctx.lineTo(83.2, 23.3);
  ctx.lineTo(83.2, 90.6);
  ctx.lineTo(78.2, 90.6);
  ctx.closePath();
  ctx.fill();
  ctx.stroke();

  // capa1/Grupo/Trazado compuesto
  ctx.beginPath();

  // capa1/Grupo/Trazado compuesto/Trazado
  ctx.moveTo(111.9, 90.6);
  ctx.lineTo(111.9, 39.4);
  ctx.lineTo(97.7, 30.9);
  ctx.lineTo(97.7, 90.6);
  ctx.lineTo(92.7, 90.6);
  ctx.lineTo(92.7, 22.2);
  ctx.lineTo(111.9, 33.7);
  ctx.lineTo(111.9, 23.3);
  ctx.lineTo(116.8, 23.3);
  ctx.lineTo(116.8, 90.6);
  ctx.lineTo(111.9, 90.6);
  ctx.closePath();
  ctx.fill();
  ctx.stroke();

  // capa1/Grupo/Trazado compuesto
  ctx.beginPath();

  // capa1/Grupo/Trazado compuesto/Trazado
  ctx.moveTo(123.4, 56.8);
  ctx.bezierCurveTo(123.4, 47.3, 126.6, 39.4, 133.0, 32.9);
  ctx.bezierCurveTo(139.4, 26.5, 147.4, 23.3, 156.8, 23.3);
  ctx.lineTo(156.8, 28.2);
  ctx.bezierCurveTo(148.8, 28.2, 142.0, 30.9, 136.6, 36.3);
  ctx.bezierCurveTo(131.1, 41.7, 128.3, 48.6, 128.3, 56.9);
  ctx.bezierCurveTo(128.3, 64.0, 130.5, 70.0, 134.8, 75.1);
  ctx.bezierCurveTo(139.1, 80.1, 144.8, 83.4, 151.8, 84.9);
  ctx.lineTo(151.8, 40.2);
  ctx.lineTo(156.8, 40.2);
  ctx.lineTo(156.8, 90.6);
  ctx.bezierCurveTo(147.1, 89.6, 139.2, 86.2, 133.2, 80.5);
  ctx.bezierCurveTo(126.7, 74.3, 123.4, 66.4, 123.4, 56.8);
  ctx.closePath();
  ctx.fill();
  ctx.stroke();

  // capa1/Trazado compuesto
  ctx.restore();
  ctx.beginPath();

  // capa1/Trazado compuesto/Trazado
  ctx.moveTo(208.5, 51.9);
  ctx.lineTo(195.1, 53.0);
  ctx.bezierCurveTo(194.6, 47.9, 193.9, 43.9, 193.0, 41.3);
  ctx.bezierCurveTo(191.3, 36.3, 188.6, 33.9, 184.9, 33.9);
  ctx.bezierCurveTo(182.1, 33.9, 180.0, 36.4, 178.5, 41.5);
  ctx.bezierCurveTo(177.0, 46.5, 176.2, 53.5, 176.2, 62.5);
  ctx.bezierCurveTo(176.2, 68.5, 176.7, 72.5, 177.5, 74.7);
  ctx.bezierCurveTo(179.1, 78.7, 182.4, 80.7, 187.5, 80.7);
  ctx.bezierCurveTo(189.0, 80.7, 190.2, 80.4, 191.0, 79.9);
  ctx.bezierCurveTo(191.8, 79.3, 192.2, 78.2, 192.2, 76.7);
  ctx.bezierCurveTo(192.2, 75.3, 192.1, 73.7, 191.8, 71.9);
  ctx.bezierCurveTo(191.5, 70.0, 191.4, 68.8, 191.3, 68.1);
  ctx.lineTo(206.1, 67.6);
  ctx.bezierCurveTo(206.1, 72.7, 204.5, 77.0, 201.3, 80.4);
  ctx.bezierCurveTo(198.1, 83.8, 193.9, 85.5, 188.8, 85.5);
  ctx.bezierCurveTo(180.4, 85.5, 173.7, 82.6, 168.7, 76.9);
  ctx.bezierCurveTo(164.0, 71.5, 161.6, 64.5, 161.6, 55.9);
  ctx.bezierCurveTo(161.6, 48.6, 164.4, 41.8, 169.8, 35.8);
  ctx.bezierCurveTo(175.3, 29.8, 181.7, 26.8, 189.0, 26.8);
  ctx.bezierCurveTo(194.7, 26.8, 199.5, 29.6, 203.4, 35.3);
  ctx.bezierCurveTo(206.8, 40.3, 208.5, 45.8, 208.5, 51.9);
  ctx.closePath();
  ctx.fill();

  // capa1/Trazado compuesto
  ctx.beginPath();

  // capa1/Trazado compuesto/Trazado
  ctx.moveTo(230.2, 49.6);
  ctx.bezierCurveTo(231.4, 49.6, 232.5, 49.7, 233.6, 49.9);
  ctx.bezierCurveTo(234.7, 50.2, 235.8, 50.6, 236.8, 51.0);
  ctx.lineTo(236.8, 46.6);
  ctx.bezierCurveTo(236.8, 44.5, 236.7, 42.5, 236.4, 40.7);
  ctx.bezierCurveTo(236.2, 38.8, 235.8, 37.0, 235.3, 35.4);
  ctx.bezierCurveTo(234.6, 33.4, 233.8, 31.8, 232.8, 30.7);
  ctx.bezierCurveTo(231.9, 29.6, 230.8, 29.1, 229.6, 29.1);
  ctx.bezierCurveTo(229.0, 29.1, 227.7, 30.1, 225.8, 32.0);
  ctx.bezierCurveTo(224.9, 32.9, 224.1, 33.9, 223.3, 34.9);
  ctx.bezierCurveTo(222.5, 36.0, 221.9, 36.9, 221.5, 37.8);
  ctx.lineTo(210.4, 37.7);
  ctx.bezierCurveTo(212.3, 32.7, 215.1, 28.7, 218.9, 25.6);
  ctx.bezierCurveTo(222.7, 22.5, 226.4, 21.0, 229.8, 21.0);
  ctx.bezierCurveTo(233.8, 21.0, 237.4, 22.2, 240.6, 24.6);
  ctx.bezierCurveTo(244.0, 27.0, 246.0, 30.3, 246.6, 34.5);
  ctx.lineTo(246.6, 34.4);
  ctx.bezierCurveTo(247.3, 37.9, 247.8, 42.0, 248.0, 46.6);
  ctx.bezierCurveTo(248.2, 48.7, 248.4, 51.3, 248.5, 54.5);
  ctx.bezierCurveTo(248.6, 57.7, 248.6, 61.2, 248.6, 65.1);
  ctx.lineTo(248.6, 74.8);
  ctx.lineTo(248.5, 82.9);
  ctx.lineTo(235.5, 84.1);
  ctx.lineTo(235.5, 82.9);
  ctx.bezierCurveTo(233.4, 84.1, 231.1, 84.7, 228.5, 84.7);
  ctx.bezierCurveTo(224.4, 84.7, 220.9, 82.7, 218.1, 78.7);
  ctx.lineTo(218.1, 78.8);
  ctx.bezierCurveTo(215.7, 75.5, 214.6, 71.7, 214.6, 67.6);
  ctx.bezierCurveTo(214.6, 65.0, 214.9, 62.6, 215.5, 60.4);
  ctx.bezierCurveTo(216.1, 58.3, 217.0, 56.5, 218.1, 54.9);
  ctx.bezierCurveTo(219.5, 53.2, 221.2, 51.9, 223.2, 50.9);
  ctx.bezierCurveTo(225.2, 50.0, 227.6, 49.6, 230.2, 49.6);
  ctx.closePath();

  // capa1/Trazado compuesto/Trazado
  ctx.moveTo(230.6, 58.1);
  ctx.bezierCurveTo(228.8, 58.1, 227.5, 58.9, 226.6, 60.5);
  ctx.bezierCurveTo(225.8, 62.0, 225.3, 63.9, 225.3, 66.0);
  ctx.bezierCurveTo(225.3, 68.4, 225.8, 70.4, 226.8, 72.3);
  ctx.bezierCurveTo(227.5, 74.4, 228.6, 75.4, 230.0, 75.4);
  ctx.bezierCurveTo(230.8, 75.4, 231.5, 75.3, 232.2, 75.1);
  ctx.bezierCurveTo(233.0, 74.9, 233.9, 74.4, 235.1, 73.5);
  ctx.bezierCurveTo(235.2, 71.0, 235.3, 68.8, 235.3, 66.8);
  ctx.bezierCurveTo(235.4, 64.7, 235.5, 62.5, 235.5, 60.0);
  ctx.bezierCurveTo(234.7, 59.4, 233.9, 58.9, 233.1, 58.6);
  ctx.bezierCurveTo(232.4, 58.3, 231.6, 58.1, 230.6, 58.1);
  ctx.closePath();
  ctx.fill();

  // capa1/Trazado compuesto
  ctx.beginPath();

  // capa1/Trazado compuesto/Trazado
  ctx.moveTo(253.0, 23.0);
  ctx.lineTo(263.2, 24.0);
  ctx.lineTo(262.5, 71.6);
  ctx.lineTo(287.3, 71.6);
  ctx.lineTo(285.7, 84.4);
  ctx.lineTo(253.6, 81.2);
  ctx.lineTo(253.0, 23.0);
  ctx.closePath();
  ctx.fill();

  // capa1/Trazado compuesto
  ctx.beginPath();

  // capa1/Trazado compuesto/Trazado
  ctx.moveTo(290.2, 61.3);
  ctx.bezierCurveTo(285.0, 56.5, 282.4, 50.3, 282.4, 42.7);
  ctx.bezierCurveTo(282.4, 36.3, 285.1, 31.3, 290.6, 27.6);
  ctx.bezierCurveTo(295.3, 24.3, 301.0, 22.7, 307.5, 22.7);
  ctx.bezierCurveTo(314.7, 22.7, 320.4, 25.0, 324.7, 29.7);
  ctx.bezierCurveTo(329.0, 34.3, 331.1, 40.3, 331.1, 47.7);
  ctx.bezierCurveTo(331.1, 54.0, 329.1, 59.1, 325.1, 62.9);
  ctx.bezierCurveTo(321.0, 66.6, 315.8, 68.5, 309.5, 68.5);
  ctx.bezierCurveTo(301.8, 68.5, 295.3, 66.1, 290.2, 61.3);
  ctx.closePath();

  // capa1/Trazado compuesto/Trazado
  ctx.moveTo(295.4, 31.1);
  ctx.bezierCurveTo(293.8, 33.3, 293.1, 36.0, 293.1, 39.0);
  ctx.bezierCurveTo(293.1, 41.6, 293.8, 44.8, 295.2, 48.8);
  ctx.bezierCurveTo(296.6, 52.8, 298.2, 55.4, 300.0, 56.6);
  ctx.lineTo(304.7, 59.2);
  ctx.bezierCurveTo(305.1, 59.4, 306.0, 59.9, 307.4, 60.7);
  ctx.bezierCurveTo(308.6, 61.3, 309.6, 61.6, 310.3, 61.6);
  ctx.bezierCurveTo(312.5, 61.6, 314.8, 60.7, 317.1, 58.7);
  ctx.bezierCurveTo(319.4, 56.8, 320.6, 54.8, 320.6, 52.6);
  ctx.lineTo(320.5, 51.5);
  ctx.bezierCurveTo(320.0, 45.6, 318.3, 40.3, 315.4, 35.9);
  ctx.bezierCurveTo(312.0, 30.4, 307.5, 27.7, 302.0, 27.7);
  ctx.bezierCurveTo(299.2, 27.7, 297.0, 28.8, 295.4, 31.1);
  ctx.closePath();

  // capa1/Trazado compuesto/Trazado
  ctx.moveTo(305.6, 19.1);
  ctx.bezierCurveTo(308.2, 14.9, 311.7, 12.2, 316.0, 11.1);
  ctx.lineTo(309.8, 5.3);
  ctx.bezierCurveTo(307.7, 9.8, 304.7, 13.6, 300.7, 16.7);
  ctx.lineTo(305.6, 19.1);
  ctx.closePath();
  ctx.fill();
  ctx.restore();
}
    
addEventListener("load", iniciar);