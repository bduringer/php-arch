<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <ol class="list-group list-group-numbered">
    <?php foreach ($users as $user) { ?>
        <!-- <div><?php echo $user->name; ?> | <a href="/user/<?php echo $user->id; ?>">Ver detalhes</a> </div> -->
        <!-- <hr> -->
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold"><?php echo $user->name; ?></div>
            listando
            </div>
            <span class="badge bg-primary rounded-pill"><a class="text-light" href="/user/<?php echo $user->id; ?>">Ver detalhes</a></span>
            
        </li>
        <?php } ?>
    </ol>
</body>
</html>