<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <?php
                foreach ($books as $book){
                    echo $book->title .' - ';
                    foreach ($book->authorToBooks as $authorToBooks){
                        echo $authorToBooks->author->first_name .' ';
                    }

                    echo '<hr>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
