<!--    CODE    -->
<!--    HERE    -->
<div class="site-section pr-5" id="properties-section" align="center">
    <div class="container " style="border: 1px">
        <h1 class="text-black">SELECT SEATS</h1>
        <br>
        <table class="mt-4" align="center" cellspacing="0" cellpadding="0" border="0">
            <tbody>
            <tr>
                <?php
                for ($i = 1; $i <= $studio->row; $i++) {
                    for ($j = 1; $j <= $studio->column; $j++) {
                        echo '<th width="25" valign="middle" align="center"><p onclick="" href="#" name="seats" id="link_A1">
                                        <img src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                            align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                            onclick="SelectSeat(this);" id="img_A1"></p></th>';
                        if ($j % 3 == 0 && $j != $studio->row) {
                            echo '<th>&nbsp&nbsp&nbsp&nbsp&nbsp</th>';
                        }
                    }
                    echo '</tr><tr>';
                }
                ?>
            </tr>
        </table>
        <br>
        <h3 class="text-black">Seat Taken <h3 id="seatTaken">0</h3></h3>
        <input type="button" class="btn btn-primary" id="buttonConfirm" name="confirmButton" value="Confirm">
    </div>
</div>
<script language="javascript">
    var total_seat = document.getElementsByName("totalTickets").values();
    var prevSquare = null;
    var seatTaken = 0;

    function SelectSeat(thisSquare) {
        if (thisSquare.getAttribute("src") === 'images/seat_own_booking.png') {
            thisSquare.setAttribute("src", 'images/seat_free.png');
            seatTaken -= 1;
        } else if (thisSquare.getAttribute("src") === 'images/seat_free.png') {
            thisSquare.setAttribute("src", 'images/seat_own_booking.png');
            seatTaken += 1;
        }
        $("#seatTaken").html(seatTaken);

    }
</script>
