<div class="login_entry" style="position:relative">
    <div id="codename_instrux">
        <div class="floatInstrux">
            <a onmouseout="changeImages('btn_choose', 'images/btn_choose.gif'); return true;" onmouseover="changeImages('btn_choose', 'images/btn_choose_over.gif'); return true;" href="#">
                <img id="btn_choose" width="142" height="19" border="0" alt="Choose Codename" src="images/btn_choose.gif" name="btn_choose" />
            </a>
        </div>
        <div class="floatForm" id="codenameDescription">
            Your codename is the name that will
            <br />
            be displayed on leaderboards and multiplayer games.
        </div>
        <div>
            <br clear="left" />
        </div>
    </div>

    <div style="top: -100px; left: 350px;width:298px;position:absolute;" id="codename_choose">
        <div align="right">
            <a href="#" onclick="closeCodename(); return false;" onmouseover="changeImages('btn_x', 'images/btn_x_over.gif'); return true;" onmouseout="changeImages('btn_x', 'images/btn_x.gif'); return true;">
                <img id="btn_x" name="btn_x" src="images/btn_x.gif" alt="Close" height="13" border="0" width="13" />
            </a>
        </div>
        <div id="codename_content">
            <div id="codename_title">
                <strong class="arial14pxBlackB">Choose Codename:</strong>
            </div>

            <?php for( $i = 1; $i <= count( $codenames ); $i++ ): ?>
                <div id="float_codename<?php echo $i ?>">
                    <?php foreach ( $codenames[$i] as $codename ): ?>
                        <a href="#" class="verdana_10pxB codename"><?php echo $codename ?></a><br />	
                    <?php endforeach ?>
                </div>
            <?php endfor ?>

            <div><br clear="all" /></div>
            <div style="padding:20px 0px 4px 0px;" align="center">
                <a href="#" onclick="codenameBio(); return false;" class="verdana_11pxB">Go to page with cryptographers' biographies</a>
            </div>
        </div>
    </div>
</div>