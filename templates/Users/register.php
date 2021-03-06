<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!--register-->
<section class="section pt-55 mb-50">
        <div class="container-fluid">
            <div class="sign widget">
                <div class="section-title">
                    <h5>Sign up</h5>
                </div>
                <?= $this->Flash->render() ?>
                <form  action="<?=$this->Url->build(['controller'=>'Users', 'action'=>'register']) ?>" class="sign-form widget-form " method="post">
                    <div class="form-group">

                    <input type="text" class="form-control" placeholder="Firstname*" name="firstname" required>
                    </div>
                    <div class="form-group">

                    <input type="text" class="form-control" placeholder="Lastname*" name="lastname" required>
                    </div>
                    <div class="form-group">

                    <input type="email" class="form-control" placeholder="Email Address*" name="email" required>
                    </div>
                    <div class="form-group">

                    <input type="password" class="form-control" placeholder="Password*" name="password" required>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn-custom">Sign Up</button>
                    </div>
                    <p class="form-group text-center">Already have an account? <a href="<?=$this->Url->build(['controller'=>'Users', 'action'=>'login']) ?>" class="btn-link">Login</a> </p>
                </form>
            </div>


        </div>
    </section>
