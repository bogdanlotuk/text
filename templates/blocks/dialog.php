<div class='dialog_wrapper'>
    <div class='table || main_table'>
        <div class='tcell || main_tcell'>
            <div class='dialog_close || dialog_bg'></div>
            <div class="modal_success dialog">
                <span class='dialog_close || icon_close'><svg class='icon'><use
                                xlink:href='/img/svgdefs.svg#icon_close'></use></svg></span>
                <?=$_SESSION['modal_success']?>
            </div>
            <div class="modal_ajax dialog">
                <span class='dialog_close || icon_close'><svg class='icon'><use
                                xlink:href='/img/svgdefs.svg#icon_close'></use></svg></span>
                <div class="modal_content"></div>

            </div>
        </div>
    </div>
</div>


<div id="toast">
    <div class='table'>
        <div class='tcell'>
            <svg class='icon || toast_icon'>
                <use xlink:href='/img/svgdefs.svg#icon_error'></use>
            </svg>
        </div>
        <div class='tcell'>
            <p id="toast_text">Please, enter a valid value</p>
        </div>
    </div>
</div>
