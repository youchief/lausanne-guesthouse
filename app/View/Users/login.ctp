<div class="background-clouds breadcrumbs-container">
        <div class="container">
                <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Login</li>
                </ol>
        </div>
</div>
<!-- Breadcrumbs - END -->

<section>
        <div class="container">
                <div class="row">

                        <div class="col-md-12">
                                <div class="content">
                                        <h1>Login</h1>
                                    <?php echo $this->Session->flash(); ?>
                                        <div class="users form">
                                                <?php echo $this->Session->flash('auth'); ?>
                                                <?php echo $this->Form->create('User'); ?>
                                                <fieldset>
                                                        <legend>
                                                                <?php echo __('Please enter your username and password'); ?>
                                                        </legend>
                                                        <?php
                                                        echo $this->Form->input('username', array('class' => 'form-control'));
                                                        echo $this->Form->input('password' ,array('class' => 'form-control'));
                                                        ?>
                                                </fieldset>
                                                <br>
                                                <?php echo $this->Form->submit(__('Login'), array('class'=>'btn btn-info')); ?>
                                                <?php echo $this->Form->end(); ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>