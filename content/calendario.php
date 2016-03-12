<?php include_once '../layouts/content/header.php'; ?>
<style>
h4#calTit {
    font-family: sans-serif;
    font-size: 1.8ex;
    line-height: 3em;
    text-align: unset;
}
</style>
<!--<div class="container">
    <div class="twelve columns offset-by-two">
        <h4><span>Si no quieres perderte ningún concierto, consulta nuestro Google Calendar o sincronízalo con la agenda de tu móvil!</span></h4>
        <div class="responsive-iframe-container">
            <iframe src="https://www.google.com/calendar/embed?title=Swingcal%C3%B3%20Concerts%20Calendar&amp;showPrint=0&amp;mode=AGENDA&amp;height=300&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=swingcalo%40gmail.com&amp;color=%232F6309&amp;ctz=Europe%2FMadrid" style=" border-width:0 " width="600" height="300" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>   
    <div class="twelve columns offset-by-five">
        <h2>Próximo concierto:</h2>
        <div class="cartel">
            <img class="topRight" src="../public/img/carteles/swingcalo_fira_sants.jpg" alt="Swingcaló" title="Swingcaló" />
        </div>
    </div>
</div>-->
<div class="container">
    <div class="ten columns offset-by-three">
        <h4 id="calTit">Consulta nuestro Google Calendar o sincronízalo con la agenda de tu móvil!</h4>
        <div class="responsive-iframe-container">
            <iframe src="https://www.google.com/calendar/embed?title=Swingcal%C3%B3%20Concerts%20Calendar&amp;showPrint=0&amp;mode=AGENDA&amp;height=300&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=swingcalo%40gmail.com&amp;color=%232F6309&amp;ctz=Europe%2FMadrid" style=" border-width:0 " width="600" height="300" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>   
    <div id="proxCon" class="five columns">
        <h2><!--Próximo concierto:--></h2>
        <div class="cartel">
           <!-- <a class="fancybox" rel="fancybox" href="../public/img/carteles/grandefirasants.jpg" title="Cartel fira de Sants"><img class="topRight" src="../public/img/carteles/firasants.jpg" alt="Swingcaló" title="Swingcaló" /></a>-->
        </div>
    </div>
</div>
   
<?php include_once '../layouts/common/footer.php'; ?>
