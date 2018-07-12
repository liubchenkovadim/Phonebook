<div id="table_contact">
    <?php

require_once "../class/SelectDB.php";
    $select = new SelectDB();
    $contacts = $select->contacts($select->getUser());
    $emails= $select->email($select->getUser());
    $phones = $select->phones($select->getUser());

    ?>
    <table>
        <tr>
            <td></td>
            <td>My contact</td>
            <td>

            </td>
        </tr>
        <tr>
            <th>Contact</th>
            <th>Phones</th>
            <th>Emails</th>
        </tr>


        <tr>
            <td>
                <table>
                    <tr>
                        <form>
                        <td>

                    <label>FirstName:</label>
                    <label>LastName:</label>
                    <label>Adress:</label>
                    <label>City:</label>
                    <label>Country:</label>

                        </td>
                            <td>
                                <input type="text" value="<?php echo $contacts[0]['firstName'] ?>"><br>
                                <input type="text" value="<?php echo $contacts[0]['lastName'] ?>"><br>
                                <input type="text" value="<?php echo $contacts[0]['adress'] ?>"><br>
                                <input type="text" value="<?php echo $contacts[0]['city'] ?>"><br>
                                <input type="text" value="<?php echo $contacts[0]['country'] ?>"><br>


                            </td>
                        </form>
                    </tr>
                </table>
            </td>
            <td>
                <form>
                    <?php
                    foreach ($phones as $phone) {
                        echo "<input value=" . $phone['phoneNumber'] . ">";
                        echo "<input type='checkbox' " . check($phone['isPublic']) . ">";
                    }
                    ?> <br> <a href="">Add</a> </form>
            </td>
            <td>
                <form>
                    <?php
                    foreach ($emails as $email) {
                        echo "<input value=" . $email['email'] . ">";
                        echo "<input type='checkbox' " . check($email['isPublic']) . ">";
                    }

                    ?>
                    <br> <a href="">Add</a>
                </form>
            </td>
        </tr>

    </table>
</div>

<?php
function check($public)
{
    if ($public == true) {
        echo 'cheked';
    }
}