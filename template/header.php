<head>
    <title>Grocery List</title>
<style type="text/css">
*{
    margin:0px;
    padding:0px;
    box-sizing:border-box;
    font-family: 'Helvetica Neue', sans-serif;
}
nav{
    display:flex;
    background:#FC4445;
    justify-content:space-around;
    align-items:center;
    min-height:8vh;
    
   
}
.logo
{
    font-family: 'Georgia', sans-serif;
    text-decoration:none;
    text-decoration-thickness: 3px;
    font-size:20px;
}
 a
{
    color:WHITE;
    text-decoration:none;
    align-items:center;
}
button
{
 display:flex; 
 align-items:center;
 border:1px solid white;
 padding:10px 20px;
 text-align:center;
 font-size:0.6rem;
 color:WHITE;
 text-transform:uppercase;
 background-color:#FC4445;

}
h6
{
    display:flex; 
    color:grey;
}

</style>
</head>
<body>
    <nav>
        <div class="logo">
         <h4>   <a href="index.php">Grocery List</a></h4>
        </div>
        <ul class="nav-links">
               <button> <a href="add.php" >Make a List</a></button>
        </ul>
</nav>

