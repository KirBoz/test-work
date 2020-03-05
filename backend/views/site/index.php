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

                        echo '<a href="review/create?id='.$book->id.'">Добавить отзыв</a>';

                        echo '</br>';
                    }
                ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <?php
                    foreach ($authors as $author){
                        echo $author->first_name .' - ';
                        echo ' кол-во книг - ';
                        if(!empty($author->authorToBooks)){
                            echo count($author->authorToBooks);
                        }
                        else{
                            echo 0;
                        }
                        echo '</br>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>
