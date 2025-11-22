<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>


<div class="formdiv">
        <form action="submit.php" method="POST">
            <label for="name">Name</label>
            <input id="name" type="text" name="user_name">

            <label for="email">EPCC Email</label>
            <input id="email" type="email" name="user_email">

            <label for="track">Track choice</label>
            <select id="track" name="track_level">
                <option value="Web">Web</option>
                <option value="Cyber">Cyber</option>
                <option value="Data">Data</option>
            </select>

            <label for="shirt">Shirt size</label>
            <select id="shirt" name="shirt_size">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="FatGuy">Large</option>
            </select>
            <br><br>
            <input class="checkbox" type="checkbox" id="laptop" name="loaner_laptop" value="Yes">
            <label class="checkboxlabel" for="laptop">I need a loaner laptop</label>
            <br><br>
            <button type="submit" name="submit_button">Register</button>
        </form>
    </div>
</html>