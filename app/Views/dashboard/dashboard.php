<?=$this->extend('layout/main')?>

<?=$this->section('content')?>
<title>Dashboard</title>
<link rel="stylesheet" href="<?=base_url()?>css/dashboard.css">
<div class="container">
    <div class="sidebar-container content ">
        <h4 class="header text-center mt-3">Welcome back, <br>Charles!</h4>
        <div class="links text-center">
            <a href="#">List of Users</a>
            <a href="#">Add New User</a>
            <a href="#">List of Users</a>
            <a href="#">List of Users</a>
            <a href="#">List of Users</a>
        </div>
        <a href="#" class="logout-btn mb-3">Log Out</a>
    </div>
    <div class="contentContainer grid-col-span-2 content">
        <p>This is a content.</p>
    </div>
</div>
<?=$this->endSection('section')?>