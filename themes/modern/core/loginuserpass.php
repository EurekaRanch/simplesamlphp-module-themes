<?php
/**
 * Footer template.
 *
 * The main footer template. This is used throughout the application.
 *
 * @author     Cory Collier <corycollier@corycollier.com>
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    git: $Id$
 * @link       https://github.com/corycollier/simplesamlphp-module-themes
 * @see        https://github.com/simplesamlphp/simplesamlphp/
 * @since      File available since Release 1.3.0
 */
?>
<?php
// Variable assignment.
$this->data['header'] = $this->t('{login:user_pass_header}');
$errorcode            = $this->data['errorcode'];
$errorparams          = $this->data['errorparams'];
?>
<?php $this->includeAtTemplateBase('includes/header.php'); ?>


<div class="vertical-center text-center">
    <div class="col-sm-9 col-xs-12 col-md-4 col-md-offset-8">
        <div class="account-wall">
            <a href="<?= WEBSITE ?>"><img style="max-height: 125px;" class="img-polaroid profile-img" src="https://drknbmw32n1iy.cloudfront.net/images/labs_logo_march_2015.png" alt="logo"></a>
            <h1 class="text-center login-title">Please sign in to continue</h1>
            <?php if ($errorcode !== NULL) : ?>
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <h4><?php echo $this->t('{login:error_header}'); ?></h4>
                        <p><?php echo htmlspecialchars($this->t('{errors:title_' . $errorcode . '}', $errorparams)); ?></p>
                        <p><?php echo htmlspecialchars($this->t('{errors:descr_' . $errorcode . '}', $errorparams)); ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <form class="form-signin" action="?" method="post" name="f">
                <input type="text" id="username"
                       tabindex="1"
                       name="username"
                       value="<?php echo htmlspecialchars($this->data['username']); ?>"
                       class="form-control"
                       autocomplete="username"
                       placeholder="Email" required autofocus
                />
                <input type="password" id="password"
                       tabindex="2"
                       name="password"
                       class="form-control"
                       autocomplete="current-password"
                       placeholder="Password" required
                />

                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <a class="pull-right forgot-password-link"href="<?= WEBSITE ?>getpassword/">Forgot Password?</a><span class="clearfix"></span>
                <?php foreach ($this->data['stateparams'] as $name => $value) : ?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars($name); ?>"
                           value="<?php echo htmlspecialchars($value); ?>" />
                <?php endforeach; ?>
            </form>
            <div class="text-center sso-link"><a href="<?= WEBSITE ?>login/sso_login.php">SSO Login</a></div>
        </div>
    </div>
</div>

<?php $this->includeAtTemplateBase('includes/footer.php'); ?>
