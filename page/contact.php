<div id="table_contact" hidden>

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
        <?php
        if ($_REQUEST['name'] !== null) {
            $select = new SelectDB();
            $contacts = $select->contacts($_REQUEST['name']);
            $emails= $select->email($_REQUEST['name']);
            $phones = $select->phones($_REQUEST['name']);
        }
        ?>
        <tr>
            <td>
                <form>
                    <label>FirstName:</label>
                    <input type="text" value="<?php echo $contacts[0]['firstName'] ?>"><br>
                    <label>LastName:</label>
                    <input type="text" value="<?php echo $contacts[0]['lastName'] ?>"><br>
                    <label>Adress:</label>
                    <input type="text" value="<?php echo $contacts[0]['adress'] ?>"><br>
                    <label>City:</label>
                    <input type="text" value="<?php echo $contacts[0]['city'] ?>"><br>
                    <label>Country:</label>
                    <input type="text" value="<?php echo $contacts[0]['country'] ?>"><br>
                </form>
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