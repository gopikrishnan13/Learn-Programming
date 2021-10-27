<!DOCTYPE html>
<html>
    <head>
        <title>
            html forms
        </title>
    </head>
    <body>
        <fieldset>
        <form action="" method="GET" enctype="multipart/form-data">
            <legend>Login Form</legend>
            <p><label for="username">Username:</label><br><input type="text" name="username" required id="username" placeholder=" Username" minlength="6" maxlength="16" size="8"></p>
            <p><label for="Password">Password:</label><br></br><input type="password" name="Password" id="Password" placeholder="Password"minlength="6" maxlength="16" size="8"></p>
            <p><label for="message" >Comments:</label><br><textarea name="message" id="message" size="20" cols="25" rows="10"></textarea></p>
            <p>
                Gender:
                <br><input type="radio" name="Gender" id="male" value="Male" ><label for="male">Male</label>
                <br><input type="radio" name="Gender" id="female"value="Female" ><label for="female">Female</label>
                <br><input type="radio" name="Gender" id="others" value="Others " checked ><label for="others">Others</label>
            </p>
            <p>
                Animale:
                <br><input type="checkbox" name="num[]" value="1" id="dog"><label for="dog">Dog</label>
                <br><input type="checkbox" name="num[]" value="2" id="cat" ><label for="cat">Cat</label>
                <br><input type="checkbox" name="num[]" value="2" id="hourse" checked><label for="hourse">Hourse</label>
            </p>
            <select name="date" id="dob" >
                <option value=0 >select date</option>
                <?php 
                for($i=1;$i<32;$i++){
                echo"<option value=$i>$i</option>";
                }
                ?>
            </select>
            <br>
            <p>    
            <select name="mdate[]" id="dob" multiple size=10 >
                <option value=0 >Multiple selection date</option>
                <?php 
                for($i=1;$i<32;$i++){
                echo"<option>$i</option>";
                }
                ?>
            </select>
            </p>
            <label for="fl">upload image:</label><input type="file" name="file" id="fl"><br>
            <p><label for="tdd">Entre today date:</label><br><input type="date" name="tdate" id="tdd"></p>
            <p><label for="range">Ratethis:</label></p><br><input type="range" name="range" id="range" min="100" max="1000" step="100">
            <p><label for="search">Search Filed:</label></p><input type="search" name="ss" id="search" placeholder="search anything">
            <p><input type="submit" value="send"></p>
        </form>
            </fieldset>
            <hr>
    </body>
</html>