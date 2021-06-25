 <!--Login-->
 <section class="section pt-55 mb-50">
        <div class="container">
            <div class="sign widget ">
                <div class="section-title">
                    <h5>Login</h5>
                </div>
                <?= $this->Flash->render() ?>
                <form  action="<?=$this->Url->build(['controller'=>'Users', 'action'=>'login']) ?>" class="sign-form widget-form " method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email address*" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password*" name="password" required>
                    </div>
                    <div class="sign-controls form-group">
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberMe">
                            <label class="custom-control-label" for="rememberMe">Remember Me</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-custom">Login</button>
                    </div>

                    <p class="form-group text-center">Don't have an account? <a href="<?=$this->Url->build(['controller'=>'Users', 'action'=>'register']) ?>" class="btn-link">Create One</a> </p>

                </form>
            </div>
        </div>
    </section>
