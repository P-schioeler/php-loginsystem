<?php
include_once "header.php";
?>
<section class="index-intro">
    <h1>Welcome to philip.local</h1>
</section>

<section class="index-categories">
    <div class="index-categories-list">
        <div class="dayofweek">
            <h3>Day of the week </h3>
            <?php
            $dayofweek = date("w");

            switch ($dayofweek) {
                case 1:
                    echo "<p>It Is Monday!</p>";
                    break;
                case 2:
                    echo "<p>It Is Tuesday!</p>";
                    break;
                case 3:
                    echo "<p>It Is Wednsday my dudes!</p>";
                    break;
                case 4:
                    echo "<p>It Is Thursday!</p>";
                    break;
                case 5:
                    echo "<p>It Is Friday!</p>";
                    break;
                case 6:
                    echo "<p>It Is Saturday!</p>";
                    break;
                case 0:
                    echo "<p>It Is Sunday!</p>";
                    break;
            }
            ?>
        </div>
        <div class="calculater">
            <h3>This is my calculator </h3>
            <form>
                <input type="text" name="num1" placeholder="Number 1">
                <input type="text" name="num2" placeholder="Number 2">
                <select name="operator">
                    <option>None</option>
                    <option>Add</option>
                    <option>Subtract</option>
                    <option>multiply</option>
                    <option>Devide</option>
                </select>
                <br>
                <button type="submit" name="submit" value="submit">Calculate</button>
            </form>
            <p>The answer is: </p>
            <?php
            if (isset($_GET['submit'])) {
                $result1 = $_GET['num1'];
                $result2 = $_GET['num2'];
                $operator = $_GET['operator'];
                switch ($operator) {
                    case "None":
                        echo "You need to select a method";
                        break;
                    case "Add":
                        echo $result1 + $result2;
                        break;
                    case "Subtract":
                        echo $result1 - $result2;
                        break;
                    case "multiply":
                        echo $result1 * $result2;
                        break;
                    case "Devide":
                        echo $result1 / $result2;
                        break;
                }
            }
            ?>

        </div>

        <div>
            <h3>exciting Stuff </h3>
        </div>
        <div>
            <h3>Boring Stuff </h3>
        </div>
    </div>

</section>
<?php
include_once "footer.php";
?>