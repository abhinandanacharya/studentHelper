
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<?php 
// if(isset($_SESSION['email']))
// {
//     $user = $_SESSION['email'];
//     extract($_POST);
//     $obj = new db();
//     $res = $obj ->show_data("select * from loguser where email = '$user'");
// }
?>
<style>
table
{
    list-style: none;
}
.space
{
    margin-left: 190px;
}
#cover
{
    background-image: url(sign/<?php echo $res[0]['sign'] ; ?>);
    background-size: cover;
    background-repeat: no-repeat;
    box-sizing: border-box;
}

.imag
{
    background-image:url(img/bg6.jpg);
    border-radius:5px;
    background-size:cover;
    color:#fff;
    font-size:18px;
}
.imag2
{
    background-image:url(img/bg5.jpg);
    border-radius:5px;
    background-size:cover;
    color:#fff;
    font-size:18px;	
}
.img-radius
{
    border-radius: 50%;
    width: 3rem;
}
.hover2
{
  background-color: #111; 
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.mt-10
{
    margin-top: 230px;
}
.mr-6
{
    margin-right: 350px;
}
.mt-6
{
    margin-top: 100px;
}
.face
{
    font-size: 24px;
    font-family: sans-serif;
    font-style: italic;
    word-spacing: 2;
}
.pl-6
{
    padding-left: 250px;
}
li
{
    list-style: none;
}
</style>
