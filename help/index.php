<?php
/*********************************************************************
    index.php

    Helpdesk landing page. Please customize it to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('client.inc.php');
$section = 'home';
require(CLIENTINC_DIR.'header.inc.php');
?>
<div id="landing_page">
    <?php
    if($cfg && ($page = $cfg->getLandingPage()))
        echo $page->getBodyWithImages();
    else
        echo  '<h1>Bienvenido a Ayuda de Escritorio CARLOSAVILES.MX</h1>';
    ?>
    <div id="new_ticket">
        <h3>Abrir un nuevo ticket de ayuda</h3>
        <br>
        <div>Por favor detalla tu problema para poder ayudarte lo mejor posible, para editar algun detalle del ticket es necesario loguearte</div>
        <p>
            <a href="open.php" class="green button">Abrir un nuevo ticket</a>
        </p>
    </div>

    <div id="check_status">
        <h3>Revisa el estatus de tu ticket</h3>
        <br>
        <div>Contamos con el archivo del estatus de los tickets actuales e históricos con sus respectivas respuestas.</div>
        <p>
            <a href="view.php" class="blue button">Revisa el estatus del ticket</a>
        </p>
    </div>
</div>
<div class="clear"></div>
<?php
if($cfg && $cfg->isKnowledgebaseEnabled()){
    //FIXME: provide ability to feature or select random FAQs ??
?>
<p>Tienes alguna duda? revisa nuestras <a href="kb/index.php">Preguntas Frecuentes</a>, antes de abrir un nuevo ticket.</p>
</div>
<?php
} ?>
<?php require(CLIENTINC_DIR.'footer.inc.php'); ?>
