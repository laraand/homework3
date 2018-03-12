<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-devie-width, initial-scale=1">
        <title>Contact Form</title>
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
        
    </head>
    <body>
        <h2>Contact Form</h2>
        <form class= "form">
            <p class="name">
                <input type="text" name="name" id="name" palceholder="First and Last Name">
                <label for="name">Name</label>
            </p>
            <p class="email">
                <input type="text" name="email" id="email" placeholder="john@example.com">
                <label for="email">Email</label>
            </p>
             
            <p>Priority</p>
            <select name="priority" size="1">
            <option value="Low">Low</option>
            <option value="Normal">Normal</option>
            <option value="Urgent">High</option>
            </select>
            
            <br/>
            <p class="text">
                <textarea name="message" row="6" cols="25"></textarea>
                <label for="email">Text</label>
            </p>
            <p class="submit">
                <input type="submit" value="Send">
                <input type="reset" value="Clear">
            </p>
            
            
        </form>
                  
                  
    </body>
</html>