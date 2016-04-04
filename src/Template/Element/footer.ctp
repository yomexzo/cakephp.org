<section id="socials" class="back-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5  social text-center">
                <?= $this->element('footer/social_interactions') ?>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-7 social-footer text-center ">
                <?= $this->element('footer/social_links') ?>
            </div>

        </div>
    </div>
</section>

<footer id="footer" class="footer-wrapper">
    <div class="container">
        <div class="row col-p30">
            <div class="col-sm-12 col-md-3">
                <div class="footer-widget t-footer">
                    <?= $this->element('footer/login_form') ?>
                </div>
            </div>

            <div class="col-sm-12 col-md-9">
                <?= $this->element('footer/menu') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mt30">
                <p class="copyright">&copy; <?= __('Copyright 2005-2016 Cake Software Foundation, Inc. All rights reserved.')?></p>
            </div>
        </div>
    </div>
</footer>
