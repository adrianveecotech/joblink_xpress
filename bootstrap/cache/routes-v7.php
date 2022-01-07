<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/email-verification/error' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email-verification.error',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor-payu/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payu::redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/set-locale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'set.locale',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/typeahead-currency_codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'typeahead.currency_codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check-package-validity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LtHpSq1IS4hcUn2X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company-email-verification/error' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.email-verification.error',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tinymce-image_upload-front' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tinymce.image_upload.front',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cronjob/send-alerts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send-alerts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscribe-newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribe.newsletter',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stripe-order-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe.order.package',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stripe-order-upgrade-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe.order.upgrade.package',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payu-order-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payu.order.package',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payu-order-package-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payu.order.package.status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payu-order-cvsearch-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payu.order.cvsearch.package',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payu-order-package.cvsearch-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payu.order.package.cvsearch.status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms-of-use' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms.of.use',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact.us',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-us-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact.us.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-us-thanks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact.us.thanks',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my-job-applications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my.job.applications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my-favourite-jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my.favourite.jobs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/post-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.job',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-front-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.front.job',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-front-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.front.job',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-seekers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.seeker.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submit-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submit-message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscribe-alert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribe.alert',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email-to-friend-thanks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email.to.friend.thanks',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report-abuse-thanks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.abuse.thanks',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report-abuse-company-thanks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.abuse.company.thanks',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company-packages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.packages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/unlocked-seekers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.unloced-users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company-home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/companies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.listing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-company-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.company.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/posted-jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posted.jobs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-company-message-send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact.company.message.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-applicant-message-send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact.applicant.message.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company-followers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.followers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submit-message-seeker' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submit-message-seeker',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company-messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.messages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/append-messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'append-message',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/append-only-messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'append-only-message',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company-submit-messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.submit-message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-default-cities-dropdown' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filter.default.cities.dropdown',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-default-states-dropdown' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filter.default.states.dropdown',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-lang-cities-dropdown' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filter.lang.cities.dropdown',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-lang-states-dropdown' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filter.lang.states.dropdown',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-cities-dropdown' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filter.cities.dropdown',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-states-dropdown' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filter.states.dropdown',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-degree-types-dropdown' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filter.degree.types.dropdown',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'my.profile.put',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-immediate-available-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.immediate.available.status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my-followings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my.followings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my-messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my.messages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seeker-append-messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seeker-append-messages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seeker-append-only-messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seeker-append-only-message',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seeker-submit-messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seeker.submit-message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-front-profile-cv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.front.profile.cv',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/upload-front-project-temp-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upload.front.project.temp.image',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-front-profile-project' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.front.profile.project',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-front-profile-experience' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.front.profile.experience',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-front-profile-education' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.front.profile.education',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-front-profile-skill' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.front.profile.skill',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-front.profile-language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.front.profile.language',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my-alerts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my-alerts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u5RmtsbhYJLpoT1M',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pTufmX0Wyr7Zaibi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.generated::WRV8ciYAoMkBBdEV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::finExcBjhjRVfS7t',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::kr3uFeAl7YPVZsuN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog-search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company-change-message-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company-change-message-status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seeker-change-message-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seeker-change-message-status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K7hQS0Z5DFRUuRKY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap/companies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8s2qx7qdaj0e7nhO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KlIzlAYwgd09ddpN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tinymce-image_upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tinymce.image_upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-admin-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.admin.users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-admin-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.admin.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-admin-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.admin.user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-admin-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.admin.user',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-admin-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.admin.users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.user',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.user',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.user',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-verified-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.verified.user',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-verified-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.verified.user',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/upload-cv-temp-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upload.cv.temp.image',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-profile-cv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.profile.cv',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/upload-project-temp-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upload.project.temp.image',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-profile-project' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.profile.project',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-profile-experience' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.profile.experience',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-profile-education' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.profile.education',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-profile-skill' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.profile.skill',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-profile-language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.profile.language',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.faqs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.faqs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.faqs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/faq-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/faq-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-seo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.seo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-seo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.seo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-cms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.cms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-cms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.cms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-cms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.cms',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-cms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.cms',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-cms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.cms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-cmsContent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.cmsContent',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-cmsContent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.cmsContent',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-cmsContent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.cmsContent',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-cmsContent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.cmsContent',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-cmsContent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.cmsContent',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/edit-site-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.site.setting',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/update-site-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.site.setting',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-career-levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.career.levels',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-career-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.career.level',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-career-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.career.level',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-career-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.career.level',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-career.levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.career.levels',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-career-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.career.level',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-career-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.career.level',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-career-levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.career.levels',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/career-level-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'career.level.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/career-level-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'career.level.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.countries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.country',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.country',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.country',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.countries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.country',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.country',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.countries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/country-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/country-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-country-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.country.details',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-country-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.country.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-country-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.country.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-country-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.country.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-country.details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.country.details',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-country-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.country.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-country-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.country.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-country-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.country.details',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/country-detail-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.detail.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/country-detail-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.detail.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-functional-areas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.functional.areas',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-functional-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.functional.area',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-functional-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.functional.area',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-functional-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.functional.area',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-functional.areas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.functional.areas',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-functional-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.functional.area',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-functional-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.functional.area',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-functional-areas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.functional.areas',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/functional-area-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'functional.area.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/functional-area-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'functional.area.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-genders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.genders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-gender' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.gender',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-gender' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.gender',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-gender' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.gender',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-genders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.genders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-gender' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.gender',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-gender' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.gender',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-genders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.genders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gender-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gender.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gender-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gender.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-industries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.industries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-industry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.industry',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-industry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.industry',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-industry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.industry',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-industries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.industries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-industry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.industry',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-industry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.industry',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-industries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.industries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/industry-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'industry.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/industry-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'industry.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-job-experiences' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.job.experiences',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-job-experience' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.job.experience',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-job-experience' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.job.experience',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-job-experience' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.job.experience',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-job.experiences' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.job.experiences',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-job-experience' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.job.experience',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-job-experience' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.job.experience',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-job-experiences' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.job.experiences',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/job-experience-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.experience.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/job-experience-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.experience.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-job-skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.job.skills',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-job-skill' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.job.skill',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-job-skill' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.job.skill',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-job-skill' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.job.skill',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-job.skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.job.skills',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-job-skill' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.job.skill',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-job-skill' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.job.skill',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-job-skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.job.skills',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/job-skill-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.skill.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/job-skill-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.skill.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-job-titles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.job.titles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-job-title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.job.title',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-job-title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.job.title',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-job-title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.job.title',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-job.titles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.job.titles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-job-title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.job.title',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-job-title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.job.title',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-job-titles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.job.titles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/job-title-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.title.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/job-title-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.title.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-job-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.job.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-job-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.job.type',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-job-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.job.type',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-job-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.job.type',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-job.types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.job.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-job-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.job.type',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-job-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.job.type',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-job-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.job.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/job-type-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.type.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/job-type-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.type.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-job-shifts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.job.shifts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-job-shift' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.job.shift',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-job-shift' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.job.shift',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-job-shift' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.job.shift',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-job.shifts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.job.shifts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-job-shift' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.job.shift',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-job-shift' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.job.shift',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-job-shifts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.job.shifts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/job-shift-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.shift.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/job-shift-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.shift.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-degree-levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.degree.levels',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-degree-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.degree.level',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-degree-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.degree.level',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-degree-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.degree.level',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-degree.levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.degree.levels',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-degree-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.degree.level',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-degree-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.degree.level',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-degree-levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.degree.levels',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/degree-level-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'degree.level.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/degree-level-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'degree.level.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-degree-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.degree.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-degree-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.degree.type',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-degree-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.degree.type',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-degree-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.degree.type',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-degree.types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.degree.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-degree-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.degree.type',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-degree-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.degree.type',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-degree-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.degree.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/degree-type-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'degree.type.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/degree-type-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'degree.type.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-major-subjects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.major.subjects',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-major-subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.major.subject',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-major-subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.major.subject',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-major-subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.major.subject',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-major.subjects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.major.subjects',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-major-subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.major.subject',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-major-subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.major.subject',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-major-subjects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.major.subjects',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/major-subject-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'major.subject.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/major-subject-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'major.subject.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.languages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.language',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.language',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.language',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.languages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.language',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-default-language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.default.language',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.language',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.states',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.state',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.state',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.state',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.states',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.state',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.state',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.states',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/state-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'state.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/state-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'state.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.cities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.city',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.city',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.city',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.cities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.city',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.city',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.cities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/city-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'city.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/city-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'city.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-result-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.result.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-result-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.result.type',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-result-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.result.type',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-result-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.result.type',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-result.types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.result.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-result-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.result.type',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-result-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.result.type',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-result-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.result.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/result-type-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'result.type.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/result-type-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'result.type.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-language-levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.language.levels',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-language-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.language.level',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-language-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.language.level',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-language-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.language.level',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-language.levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.language.levels',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-language-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.language.level',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-language-level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.language.level',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-language-levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.language.levels',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/language-level-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'language.level.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/language-level-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'language.level.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-marital-statuses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.marital.statuses',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-marital-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.marital.status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-marital-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.marital.status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-marital-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.marital.status',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-marital.statuses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.marital.statuses',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-marital-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.marital.status',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-marital-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.marital.status',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-marital-statuses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.marital.statuses',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marital-status-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'marital.status.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marital-status-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'marital.status.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-companies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.companies',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-payment-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.payment.hostory',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-payment-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.companiesHistory',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.company',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.company',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.company',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-companies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.companies',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.company',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.company',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-featured-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.featured.company',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-featured-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.featured.company',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-paid-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.paid.company',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-paid-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.paid.company',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-ownership-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.ownership.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-ownership-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.ownership.type',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-ownership-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.ownership.type',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-ownership-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.ownership.type',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-ownership.types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.ownership.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-ownership-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.ownership.type',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-ownership-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.ownership.type',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-ownership-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.ownership.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ownership-type-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ownership.type.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ownership-type-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ownership.type.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.jobs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pending-approval-jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pending_approval.jobs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.job',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.job',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.job',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.jobs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-pending-jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.pending_jobs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.job',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-approve-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.approve.job',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.job',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-featured-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.featured.job',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-featured-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.featured.job',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-salary-periods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.salary.periods',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-salary-period' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.salary.period',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-salary-period' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.salary.period',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-salary-period' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.salary.period',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-salary.periods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.salary.periods',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-salary-period' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.salary.period',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-salary-period' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.salary.period',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-salary-periods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.salary.periods',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salary-period-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salary.period.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salary-period-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salary.period.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-contact-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.contact.message',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-contact.message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.contact.message',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-packages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.packages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.package',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.package',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.package',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-packages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.packages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.videos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.video',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.video',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.video',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.videos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.video',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.video',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.videos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/video-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/video-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-testimonials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.testimonials',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.testimonial',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.testimonial',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.testimonial',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-testimonials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.testimonials',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.testimonial',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.testimonial',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-testimonials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.testimonials',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/testimonial-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testimonial.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/testimonial-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testimonial.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/list-sliders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.sliders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.slider',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store-slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.slider',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.slider',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetch-sliders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.data.sliders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-active-slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.active.slider',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-not-active-slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.not.active.slider',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sort-sliders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sort.sliders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider-sort-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.sort.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider-sort-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.sort.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9LKUVOmyebP8QJ9n',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zg87W6XO29zGarRS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EegQuUS9D5fP8yyH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/add-new-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add-new-blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gkvRjXBiPYEtbCJW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rdCWdQ985e9UpkiZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/e(?|mail\\-(?|verification/check/([^/]++)(*:48)|to\\-friend/([^/]++)(?|(*:77)))|dit\\-front\\-job/([^/]++)(*:110))|/c(?|ompany(?|\\-(?|email\\-verification/check/([^/]++)(*:172)|message\\-detail/([^/]++)(*:204))|/(?|([^/]++)(*:225)|log(?|in(?|(*:244))|out(*:256))|register(?|(*:276))|password/reset/([^/]++)(*:308)))|ms/([^/]++)(*:329))|/l(?|ogin/(?|joblink\\-xpress/([^/]++)(?|(*:378)|/callback(*:395))|employer/([^/]++)(?|(*:424)|/callback(*:441)))|ist\\-(?|applied\\-users/([^/]++)(*:482)|favourite\\-applied\\-users/([^/]++)(*:524)))|/order\\-(?|free\\-package/([^/]++)(*:567)|package/([^/]++)(*:591)|upgrade\\-package/([^/]++)(*:624))|/pa(?|ypal\\-(?|payment\\-status/([^/]++)(*:672)|upgrade\\-payment\\-status/([^/]++)(*:713))|ssword/reset/([^/]++)(*:743))|/s(?|t(?|ripe\\-order\\-form/([^/]++)/([^/]++)(*:796)|ore\\-front\\-profile\\-(?|cv/([^/]++)(*:839)|project/([^/]++)(*:863)|e(?|xperience/([^/]++)(*:893)|ducation/([^/]++)(*:918))|skill/([^/]++)(*:941)|language/([^/]++)(*:966)))|how\\-(?|front\\-profile\\-(?|cvs/([^/]++)(*:1015)|projects/([^/]++)(*:1041)|e(?|xperience/([^/]++)(*:1072)|ducation/([^/]++)(*:1098))|skills/([^/]++)(*:1123)|languages/([^/]++)(*:1150))|applicant\\-profile\\-(?|projects/([^/]++)(*:1200)|e(?|xperience/([^/]++)(*:1231)|ducation/([^/]++)(*:1257))|skills/([^/]++)(*:1282)|languages/([^/]++)(*:1309))))|/job/([^/]++)(*:1334)|/a(?|ppl(?|y/([^/]++)(?|(*:1367))|icant\\-(?|profile/([^/]++)(*:1403)|message\\-detail/([^/]++)(*:1436)))|d(?|d\\-to\\-favourite\\-(?|job/([^/]++)(*:1484)|applicant/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:1538)|company/([^/]++)(*:1563))|min/(?|password/reset/([^/]++)(*:1603)|edit\\-(?|admin\\-user/([^/]++)(*:1641)|user/([^/]++)(*:1663)|f(?|aq/([^/]++)(?:/([^/]++))?(*:1701)|unctional\\-area/([^/]++)(*:1734))|s(?|eo/([^/]++)(?:/([^/]++))?(*:1773)|tate/([^/]++)(*:1795)|alary\\-period/([^/]++)(*:1826)|lider/([^/]++)(*:1849))|c(?|ms(?|/([^/]++)(?:/([^/]++))?(*:1891)|Content/([^/]++)(?:/([^/]++))?(*:1930))|areer\\-level/([^/]++)(*:1961)|o(?|untry(?|/([^/]++)(*:1991)|\\-detail/([^/]++)(*:2017))|mpany/([^/]++)(*:2041))|ity/([^/]++)(*:2063))|gender/([^/]++)(*:2088)|industry/([^/]++)(*:2114)|job(?|\\-(?|experience/([^/]++)(*:2153)|s(?|kill/([^/]++)(*:2179)|hift/([^/]++)(*:2201))|t(?|itle/([^/]++)(*:2228)|ype/([^/]++)(*:2249)))|/([^/]++)(*:2269))|degree\\-(?|level/([^/]++)(*:2304)|type/([^/]++)(*:2326))|ma(?|jor\\-subject/([^/]++)(*:2362)|rital\\-status/([^/]++)(*:2393))|language(?|/([^/]++)(*:2423)|\\-level/([^/]++)(*:2448))|result\\-type/([^/]++)(*:2479)|ownership\\-type/([^/]++)(*:2512)|package/([^/]++)(*:2537)|video/([^/]++)(*:2560)|testimonial/([^/]++)(*:2589))|update\\-(?|admin\\-user/([^/]++)(*:2630)|user/([^/]++)(*:2652)|p(?|rofile\\-(?|s(?|ummary/([^/]++)(*:2695)|kill/([^/]++)/([^/]++)(*:2726))|cv/([^/]++)/([^/]++)(*:2756)|project/([^/]++)/([^/]++)(*:2790)|e(?|xperience/([^/]++)/([^/]++)(*:2830)|ducation/([^/]++)/([^/]++)(*:2865))|language/([^/]++)/([^/]++)(*:2901))|ackage/([^/]++)(*:2926))|f(?|aq/([^/]++)(*:2951)|unctional\\-area/([^/]++)(*:2984))|s(?|eo/([^/]++)(*:3009)|tate/([^/]++)(*:3031)|alary\\-period/([^/]++)(*:3062)|lider/([^/]++)(*:3085))|c(?|ms(?|/([^/]++)(*:3113)|Content/([^/]++)(*:3138))|areer\\-level/([^/]++)(*:3169)|o(?|untry(?|/([^/]++)(*:3199)|\\-detail/([^/]++)(*:3225))|mpany/([^/]++)(*:3249))|ity/([^/]++)(*:3271))|gender/([^/]++)(*:3296)|industry/([^/]++)(*:3322)|job(?|\\-(?|experience/([^/]++)(*:3361)|s(?|kill/([^/]++)(*:3387)|hift/([^/]++)(*:3409))|t(?|itle/([^/]++)(*:3436)|ype/([^/]++)(*:3457)))|/([^/]++)(*:3477))|degree\\-(?|level/([^/]++)(*:3512)|type/([^/]++)(*:3534))|ma(?|jor\\-subject/([^/]++)(*:3570)|rital\\-status/([^/]++)(*:3601))|language(?|/([^/]++)(*:3631)|\\-level/([^/]++)(*:3656))|result\\-type/([^/]++)(*:3687)|ownership\\-type/([^/]++)(*:3720)|video/([^/]++)(*:3743)|testimonial/([^/]++)(*:3772))|s(?|how\\-profile\\-(?|cvs/([^/]++)(*:3815)|projects/([^/]++)(*:3841)|e(?|xperience/([^/]++)(*:3872)|ducation/([^/]++)(*:3898))|skills/([^/]++)(*:3923)|languages/([^/]++)(*:3950))|tore\\-profile\\-(?|cv/([^/]++)(*:3989)|project/([^/]++)(*:4014)|e(?|xperience/([^/]++)(*:4045)|ducation/([^/]++)(*:4071))|skill/([^/]++)(*:4095)|language/([^/]++)(*:4121)))|get\\-profile\\-(?|cv\\-(?|form/([^/]++)(*:4169)|edit\\-form/([^/]++)(*:4197))|project\\-(?|form/([^/]++)(*:4232)|edit\\-form/([^/]++)(*:4260))|e(?|xperience\\-(?|form/([^/]++)(*:4301)|edit\\-form/([^/]++)(*:4329))|ducation\\-(?|form/([^/]++)(*:4365)|edit\\-form/([^/]++)(*:4393)))|skill\\-(?|form/([^/]++)(*:4427)|edit\\-form/([^/]++)(*:4455))|language\\-(?|form/([^/]++)(*:4491)|edit\\-form/([^/]++)(*:4519)))|blog(?|_category/(?|([^/]++)(*:4558)|get_blog_category_by_id/([^/]++)(*:4599))|/(?|([^/]++)(*:4621)|remove_blog_feature_image/([^/]++)(*:4664)|get_blog_by_id/([^/]++)(*:4696)|edit\\-blog/([^/]++)(*:4724))))))|/re(?|move\\-from\\-favourite\\-(?|job/([^/]++)(*:4782)|applicant/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:4836)|company/([^/]++)(*:4861))|port\\-abuse(?|/([^/]++)(?|(*:4897))|\\-company/([^/]++)(?|(*:4928))))|/u(?|pdate\\-front\\-(?|job/([^/]++)(*:4974)|profile\\-(?|s(?|ummary/([^/]++)(*:5014)|kill/([^/]++)/([^/]++)(*:5045))|cv/([^/]++)/([^/]++)(*:5075)|project/([^/]++)/([^/]++)(*:5109)|e(?|xperience/([^/]++)/([^/]++)(*:5149)|ducation/([^/]++)/([^/]++)(*:5184))|language/([^/]++)/([^/]++)(*:5220)))|nlock/([^/]++)(*:5245)|ser\\-profile/([^/]++)(*:5275))|/view\\-public\\-profile/([^/]++)(*:5316)|/get\\-front\\-profile\\-(?|cv\\-(?|form/([^/]++)(*:5370)|edit\\-form/([^/]++)(*:5398))|project\\-(?|form/([^/]++)(*:5433)|edit\\-form/([^/]++)(*:5461))|e(?|xperience\\-(?|form/([^/]++)(*:5502)|edit\\-form/([^/]++)(*:5530))|ducation\\-(?|form/([^/]++)(*:5566)|edit\\-form/([^/]++)(*:5594)))|skill\\-(?|form/([^/]++)(*:5628)|edit\\-form/([^/]++)(*:5656))|language\\-(?|form/([^/]++)(*:5692)|edit\\-form/([^/]++)(*:5720)))|/delete\\-alert/([^/]++)(*:5754)|/blog/(?|([^/]++)(*:5780)|category/([^/]++)(*:5806)))/?$}sDu',
    ),
    3 => 
    array (
      48 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email-verification.check',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      77 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email.to.friend',
          ),
          1 => 
          array (
            0 => 'job_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'email.to.friend.post',
          ),
          1 => 
          array (
            0 => 'job_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.front.job',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.email-verification.check',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      204 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.message.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.detail',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.login',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.generated::no9E1VgoyuhoaL4n',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.logout',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.register',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.generated::DRwB5X6HGwXDjUen',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::33w0bxviWqbNJxHS',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jVepqcWiObQKA28l',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MTDbGeeN9tlgMf8k',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::waNpnzbg1UfkOLph',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.applied.users',
          ),
          1 => 
          array (
            0 => 'job_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'list.favourite.applied.users',
          ),
          1 => 
          array (
            0 => 'job_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'order.free.package',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'order.package',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'order.upgrade.package',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upgrade.payment.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe.order.form',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'new_or_upgrade',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.front.profile.cv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      863 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.front.profile.project',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      893 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.front.profile.experience',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      918 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.front.profile.education',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      941 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.front.profile.skill',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.front.profile.language',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.front.profile.cvs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1041 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.front.profile.projects',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1072 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.front.profile.experience',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1098 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.front.profile.education',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.front.profile.skills',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.front.profile.languages',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.applicant.profile.projects',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1231 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.applicant.profile.experience',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.applicant.profile.education',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.applicant.profile.skills',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.applicant.profile.languages',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'job.detail',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'apply.job',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post.apply.job',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'applicant.profile',
          ),
          1 => 
          array (
            0 => 'application_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'applicant.message.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1484 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.to.favourite',
          ),
          1 => 
          array (
            0 => 'job_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.to.favourite.applicant',
          ),
          1 => 
          array (
            0 => 'application_id',
            1 => 'user_id',
            2 => 'job_id',
            3 => 'company_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.to.favourite.company',
          ),
          1 => 
          array (
            0 => 'company_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.admin.user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.faq',
            'industry_id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'industry_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1734 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.functional.area',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.seo',
            'industry_id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'industry_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1795 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.state',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.salary.period',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1849 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.slider',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1891 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.cms',
            'industry_id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'industry_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.cmsContent',
            'industry_id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'industry_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1961 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.career.level',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.country',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2017 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.country.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2041 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.company',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2063 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.city',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2088 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.gender',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.industry',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.job.experience',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.job.skill',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.job.shift',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.job.title',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.job.type',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.job',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.degree.level',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.degree.type',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.major.subject',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.marital.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.language',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.language.level',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.result.type',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2512 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.ownership.type',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.package',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.video',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2589 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.testimonial',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.admin.user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.profile.summary',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.profile.skill',
          ),
          1 => 
          array (
            0 => 'skill_id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.profile.cv',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.profile.project',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2830 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.profile.experience',
          ),
          1 => 
          array (
            0 => 'profile_experience_id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.profile.education',
          ),
          1 => 
          array (
            0 => 'education_id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2901 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.profile.language',
          ),
          1 => 
          array (
            0 => 'language_id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2926 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.package',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.faq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2984 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.functional.area',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.seo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.state',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3062 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.salary.period',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3085 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.slider',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.cms',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.cmsContent',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.career.level',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.country',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.country.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.company',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.city',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.gender',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.industry',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.job.experience',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.job.skill',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.job.shift',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.job.title',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.job.type',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.job',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3512 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.degree.level',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.degree.type',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.major.subject',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3601 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.marital.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.language',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.language.level',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.result.type',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.ownership.type',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.video',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.testimonial',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3815 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.profile.cvs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.profile.projects',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.profile.experience',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3898 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.profile.education',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3923 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.profile.skills',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.profile.languages',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.profile.cv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.profile.project',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.profile.experience',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4071 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.profile.education',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4095 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.profile.skill',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.profile.language',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.cv.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.cv.edit.form',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4232 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.project.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.project.edit.form',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.experience.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.experience.edit.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.education.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.education.edit.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4427 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.skill.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.skill.edit.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.language.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.profile.language.edit.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4558 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YJ4CBMUxHHeTev9E',
          ),
          1 => 
          array (
            0 => 'blog_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xg8ZU9Q44h6zeh8I',
          ),
          1 => 
          array (
            0 => 'blog_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r5hFyD9DzmrmpDyH',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N0hmO8TQNUHlzkh7',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mhToTfoh8izqvVKz',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4724 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit-blog',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove.from.favourite',
          ),
          1 => 
          array (
            0 => 'job_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove.from.favourite.applicant',
          ),
          1 => 
          array (
            0 => 'application_id',
            1 => 'user_id',
            2 => 'job_id',
            3 => 'company_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove.from.favourite.company',
          ),
          1 => 
          array (
            0 => 'company_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4897 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.abuse',
          ),
          1 => 
          array (
            0 => 'job_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'report.abuse.post',
          ),
          1 => 
          array (
            0 => 'job_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.abuse.company',
          ),
          1 => 
          array (
            0 => 'company_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'report.abuse.company.post',
          ),
          1 => 
          array (
            0 => 'company_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4974 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.front.job',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.front.profile.summary',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.front.profile.skill',
          ),
          1 => 
          array (
            0 => 'skill_id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5075 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.front.profile.cv',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.front.profile.project',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.front.profile.experience',
          ),
          1 => 
          array (
            0 => 'profile_experience_id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.front.profile.education',
          ),
          1 => 
          array (
            0 => 'education_id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.front.profile.language',
          ),
          1 => 
          array (
            0 => 'language_id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.unlock',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.public.profile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.cv.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.cv.edit.form',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.project.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.project.edit.form',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.experience.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.experience.edit.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.education.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.education.edit.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.skill.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.skill.edit.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.language.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.front.profile.language.edit.form',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5754 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete-alert',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5780 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog-detail',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5806 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog-category',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'email-verification.error' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email-verification/error',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@getVerificationError',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@getVerificationError',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'email-verification.error',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'email-verification.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email-verification/check/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@getVerification',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@getVerification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'email-verification.check',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'payu::redirect' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vendor-payu/status',
      'action' => 
      array (
        'uses' => 'Tzsk\\Payu\\Controllers\\StatusController@__invoke',
        'controller' => 'Tzsk\\Payu\\Controllers\\StatusController',
        'as' => 'payu::redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IndexController@index',
        'controller' => 'App\\Http\\Controllers\\IndexController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'set.locale' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'set-locale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IndexController@setLocale',
        'controller' => 'App\\Http\\Controllers\\IndexController@setLocale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'set.locale',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'typeahead.currency_codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'typeahead-currency_codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TypeAheadController@typeAheadCurrencyCodes',
        'controller' => 'App\\Http\\Controllers\\TypeAheadController@typeAheadCurrencyCodes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'typeahead.currency_codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\FaqController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LtHpSq1IS4hcUn2X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'check-package-validity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@checkPackageValidity',
        'controller' => 'App\\Http\\Controllers\\CronController@checkPackageValidity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::LtHpSq1IS4hcUn2X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.email-verification.error' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company-email-verification/error',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\RegisterController@getVerificationError',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\RegisterController@getVerificationError',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.email-verification.error',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.email-verification.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company-email-verification/check/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\RegisterController@getVerification',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\RegisterController@getVerification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.email-verification.check',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::33w0bxviWqbNJxHS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/joblink-xpress/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToProvider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::33w0bxviWqbNJxHS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jVepqcWiObQKA28l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/joblink-xpress/{provider}/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@handleProviderCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@handleProviderCallback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::jVepqcWiObQKA28l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MTDbGeeN9tlgMf8k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/employer/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@redirectToProvider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::MTDbGeeN9tlgMf8k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::waNpnzbg1UfkOLph' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/employer/{provider}/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@handleProviderCallback',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@handleProviderCallback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::waNpnzbg1UfkOLph',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tinymce.image_upload.front' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tinymce-image_upload-front',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TinyMceController@uploadImage',
        'controller' => 'App\\Http\\Controllers\\TinyMceController@uploadImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'tinymce.image_upload.front',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'send-alerts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cronjob/send-alerts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AlertCronController@index',
        'controller' => 'App\\Http\\Controllers\\AlertCronController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'send-alerts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subscribe.newsletter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscribe-newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@getSubscription',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@getSubscription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'subscribe.newsletter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'order.free.package' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order-free-package/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@orderFreePackage',
        'controller' => 'App\\Http\\Controllers\\OrderController@orderFreePackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'order.free.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'order.package' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order-package/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@orderPackage',
        'controller' => 'App\\Http\\Controllers\\OrderController@orderPackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'order.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'order.upgrade.package' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order-upgrade-package/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@orderUpgradePackage',
        'controller' => 'App\\Http\\Controllers\\OrderController@orderUpgradePackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'order.upgrade.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'payment.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal-payment-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@getPaymentStatus',
        'controller' => 'App\\Http\\Controllers\\OrderController@getPaymentStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'payment.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'upgrade.payment.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal-upgrade-payment-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@getUpgradePaymentStatus',
        'controller' => 'App\\Http\\Controllers\\OrderController@getUpgradePaymentStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'upgrade.payment.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stripe.order.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe-order-form/{id}/{new_or_upgrade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeOrderController@stripeOrderForm',
        'controller' => 'App\\Http\\Controllers\\StripeOrderController@stripeOrderForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'stripe.order.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stripe.order.package' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stripe-order-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeOrderController@stripeOrderPackage',
        'controller' => 'App\\Http\\Controllers\\StripeOrderController@stripeOrderPackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'stripe.order.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stripe.order.upgrade.package' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stripe-order-upgrade-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeOrderController@stripeOrderUpgradePackage',
        'controller' => 'App\\Http\\Controllers\\StripeOrderController@stripeOrderUpgradePackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'stripe.order.upgrade.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'payu.order.package' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payu-order-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PayuController@orderPackage',
        'controller' => 'App\\Http\\Controllers\\PayuController@orderPackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'payu.order.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'payu.order.package.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payu-order-package-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PayuController@orderPackageStatus',
        'controller' => 'App\\Http\\Controllers\\PayuController@orderPackageStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'payu.order.package.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'payu.order.cvsearch.package' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payu-order-cvsearch-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PayuController@orderCvSearchPackage',
        'controller' => 'App\\Http\\Controllers\\PayuController@orderCvSearchPackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'payu.order.cvsearch.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'payu.order.package.cvsearch.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payu-order-package.cvsearch-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PayuController@orderPackageCvSearchStatus',
        'controller' => 'App\\Http\\Controllers\\PayuController@orderPackageCvSearchStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'payu.order.package.cvsearch.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CmsController@getPage',
        'controller' => 'App\\Http\\Controllers\\CmsController@getPage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'terms.of.use' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-of-use',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CmsController@termsOfUse',
        'controller' => 'App\\Http\\Controllers\\CmsController@termsOfUse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'terms.of.use',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contact.us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@index',
        'controller' => 'App\\Http\\Controllers\\ContactController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'contact.us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contact.us.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-us-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@postContact',
        'controller' => 'App\\Http\\Controllers\\ContactController@postContact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'contact.us.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contact.us.thanks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-us-thanks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@thanks',
        'controller' => 'App\\Http\\Controllers\\ContactController@thanks',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'contact.us.thanks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobController@jobDetail',
        'controller' => 'App\\Http\\Controllers\\Job\\JobController@jobDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'job.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'apply.job' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'apply/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobController@applyJob',
        'controller' => 'App\\Http\\Controllers\\Job\\JobController@applyJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'apply.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'post.apply.job' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'apply/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobController@postApplyJob',
        'controller' => 'App\\Http\\Controllers\\Job\\JobController@postApplyJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'post.apply.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobController@jobsBySearch',
        'controller' => 'App\\Http\\Controllers\\Job\\JobController@jobsBySearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'job.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'add.to.favourite' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-to-favourite-job/{job_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobController@addToFavouriteJob',
        'controller' => 'App\\Http\\Controllers\\Job\\JobController@addToFavouriteJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'add.to.favourite',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'remove.from.favourite' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'remove-from-favourite-job/{job_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobController@removeFromFavouriteJob',
        'controller' => 'App\\Http\\Controllers\\Job\\JobController@removeFromFavouriteJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'remove.from.favourite',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my.job.applications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my-job-applications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobController@myJobApplications',
        'controller' => 'App\\Http\\Controllers\\Job\\JobController@myJobApplications',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'my.job.applications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my.favourite.jobs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my-favourite-jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobController@myFavouriteJobs',
        'controller' => 'App\\Http\\Controllers\\Job\\JobController@myFavouriteJobs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'my.favourite.jobs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'post.job' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'post-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobPublishController@createFrontJob',
        'controller' => 'App\\Http\\Controllers\\Job\\JobPublishController@createFrontJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'post.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.front.job' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-front-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobPublishController@storeFrontJob',
        'controller' => 'App\\Http\\Controllers\\Job\\JobPublishController@storeFrontJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'store.front.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.front.job' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-front-job/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobPublishController@editFrontJob',
        'controller' => 'App\\Http\\Controllers\\Job\\JobPublishController@editFrontJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'edit.front.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.front.job' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-front-job/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobPublishController@updateFrontJob',
        'controller' => 'App\\Http\\Controllers\\Job\\JobPublishController@updateFrontJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update.front.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.front.job' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete-front-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobPublishController@deleteJob',
        'controller' => 'App\\Http\\Controllers\\Job\\JobPublishController@deleteJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete.front.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.seeker.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-seekers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\JobSeekerController@jobSeekersBySearch',
        'controller' => 'App\\Http\\Controllers\\Job\\JobSeekerController@jobSeekersBySearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'job.seeker.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submit-message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submit-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\SeekerSendController@submit_message',
        'controller' => 'App\\Http\\Controllers\\Job\\SeekerSendController@submit_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'submit-message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subscribe.alert' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscribe-alert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@submitAlert',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@submitAlert',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'subscribe.alert',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'email.to.friend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email-to-friend/{job_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@emailToFriend',
        'controller' => 'App\\Http\\Controllers\\ContactController@emailToFriend',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'email.to.friend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'email.to.friend.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email-to-friend/{job_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@emailToFriendPost',
        'controller' => 'App\\Http\\Controllers\\ContactController@emailToFriendPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'email.to.friend.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'email.to.friend.thanks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email-to-friend-thanks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@emailToFriendThanks',
        'controller' => 'App\\Http\\Controllers\\ContactController@emailToFriendThanks',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'email.to.friend.thanks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'report.abuse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report-abuse/{job_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@reportAbuse',
        'controller' => 'App\\Http\\Controllers\\ContactController@reportAbuse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'report.abuse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'report.abuse.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report-abuse/{job_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@reportAbusePost',
        'controller' => 'App\\Http\\Controllers\\ContactController@reportAbusePost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'report.abuse.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'report.abuse.thanks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report-abuse-thanks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@reportAbuseThanks',
        'controller' => 'App\\Http\\Controllers\\ContactController@reportAbuseThanks',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'report.abuse.thanks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'report.abuse.company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report-abuse-company/{company_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@reportAbuseCompany',
        'controller' => 'App\\Http\\Controllers\\ContactController@reportAbuseCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'report.abuse.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'report.abuse.company.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report-abuse-company/{company_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@reportAbuseCompanyPost',
        'controller' => 'App\\Http\\Controllers\\ContactController@reportAbuseCompanyPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'report.abuse.company.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'report.abuse.company.thanks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report-abuse-company-thanks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@reportAbuseCompanyThanks',
        'controller' => 'App\\Http\\Controllers\\ContactController@reportAbuseCompanyThanks',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'report.abuse.company.thanks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.packages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company-packages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@resume_search_packages',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@resume_search_packages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.packages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.unloced-users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'unlocked-seekers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@unlocked_users',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@unlocked_users',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.unloced-users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.unlock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'unlock/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@unlock',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@unlock',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.unlock',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company-home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@index',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.listing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompaniesController@company_listing',
        'controller' => 'App\\Http\\Controllers\\Company\\CompaniesController@company_listing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.listing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@companyProfile',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@companyProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.company.profile' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-company-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@updateCompanyProfile',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@updateCompanyProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update.company.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posted.jobs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'posted-jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@postedJobs',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@postedJobs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'posted.jobs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@companyDetail',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@companyDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contact.company.message.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-company-message-send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@sendContactForm',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@sendContactForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'contact.company.message.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contact.applicant.message.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-applicant-message-send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@sendApplicantContactForm',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@sendApplicantContactForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'contact.applicant.message.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.applied.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-applied-users/{job_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@listAppliedUsers',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@listAppliedUsers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'list.applied.users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.favourite.applied.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-favourite-applied-users/{job_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@listFavouriteAppliedUsers',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@listFavouriteAppliedUsers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'list.favourite.applied.users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'add.to.favourite.applicant' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-to-favourite-applicant/{application_id}/{user_id}/{job_id}/{company_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@addToFavouriteApplicant',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@addToFavouriteApplicant',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'add.to.favourite.applicant',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'remove.from.favourite.applicant' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'remove-from-favourite-applicant/{application_id}/{user_id}/{job_id}/{company_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@removeFromFavouriteApplicant',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@removeFromFavouriteApplicant',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'remove.from.favourite.applicant',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'applicant.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'applicant-profile/{application_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@applicantProfile',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@applicantProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'applicant.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@userProfile',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@userProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.followers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company-followers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@companyFollowers',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@companyFollowers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.followers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submit-message-seeker' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submit-message-seeker',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyMessagesController@submitnew_message_seeker',
        'controller' => 'App\\Http\\Controllers\\CompanyMessagesController@submitnew_message_seeker',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'submit-message-seeker',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.messages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyMessagesController@all_messages',
        'controller' => 'App\\Http\\Controllers\\CompanyMessagesController@all_messages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.messages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'append-message' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'append-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyMessagesController@append_messages',
        'controller' => 'App\\Http\\Controllers\\CompanyMessagesController@append_messages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'append-message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'append-only-message' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'append-only-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyMessagesController@appendonly_messages',
        'controller' => 'App\\Http\\Controllers\\CompanyMessagesController@appendonly_messages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'append-only-message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.submit-message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company-submit-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyMessagesController@submit_message',
        'controller' => 'App\\Http\\Controllers\\CompanyMessagesController@submit_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.submit-message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.message.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company-message-detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\CompanyController@companyMessageDetail',
        'controller' => 'App\\Http\\Controllers\\Company\\CompanyController@companyMessageDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company.message.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'filter.default.cities.dropdown' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'filter-default-cities-dropdown',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AjaxController@filterDefaultCities',
        'controller' => 'App\\Http\\Controllers\\AjaxController@filterDefaultCities',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'filter.default.cities.dropdown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'filter.default.states.dropdown' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'filter-default-states-dropdown',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AjaxController@filterDefaultStates',
        'controller' => 'App\\Http\\Controllers\\AjaxController@filterDefaultStates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'filter.default.states.dropdown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'filter.lang.cities.dropdown' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'filter-lang-cities-dropdown',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AjaxController@filterLangCities',
        'controller' => 'App\\Http\\Controllers\\AjaxController@filterLangCities',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'filter.lang.cities.dropdown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'filter.lang.states.dropdown' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'filter-lang-states-dropdown',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AjaxController@filterLangStates',
        'controller' => 'App\\Http\\Controllers\\AjaxController@filterLangStates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'filter.lang.states.dropdown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'filter.cities.dropdown' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'filter-cities-dropdown',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AjaxController@filterCities',
        'controller' => 'App\\Http\\Controllers\\AjaxController@filterCities',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'filter.cities.dropdown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'filter.states.dropdown' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'filter-states-dropdown',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AjaxController@filterStates',
        'controller' => 'App\\Http\\Controllers\\AjaxController@filterStates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'filter.states.dropdown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'filter.degree.types.dropdown' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'filter-degree-types-dropdown',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AjaxController@filterDegreeTypes',
        'controller' => 'App\\Http\\Controllers\\AjaxController@filterDegreeTypes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'filter.degree.types.dropdown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@myProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@myProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'my.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my.profile.put' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'my-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateMyProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@updateMyProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'my.profile.put',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'view.public.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-public-profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@viewPublicProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@viewPublicProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'view.public.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.front.profile.summary' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-front-profile-summary/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateProfileSummary',
        'controller' => 'App\\Http\\Controllers\\UserController@updateProfileSummary',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update.front.profile.summary',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.immediate.available.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-immediate-available-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateImmediateAvailableStatus',
        'controller' => 'App\\Http\\Controllers\\UserController@updateImmediateAvailableStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update.immediate.available.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'add.to.favourite.company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-to-favourite-company/{company_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@addToFavouriteCompany',
        'controller' => 'App\\Http\\Controllers\\UserController@addToFavouriteCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'add.to.favourite.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'remove.from.favourite.company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'remove-from-favourite-company/{company_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@removeFromFavouriteCompany',
        'controller' => 'App\\Http\\Controllers\\UserController@removeFromFavouriteCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'remove.from.favourite.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my.followings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my-followings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@myFollowings',
        'controller' => 'App\\Http\\Controllers\\UserController@myFollowings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'my.followings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my.messages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\SeekerSendController@all_messages',
        'controller' => 'App\\Http\\Controllers\\Job\\SeekerSendController@all_messages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'my.messages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'seeker-append-messages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seeker-append-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\SeekerSendController@append_messages',
        'controller' => 'App\\Http\\Controllers\\Job\\SeekerSendController@append_messages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'seeker-append-messages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'seeker-append-only-message' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seeker-append-only-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\SeekerSendController@appendonly_messages',
        'controller' => 'App\\Http\\Controllers\\Job\\SeekerSendController@appendonly_messages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'seeker-append-only-message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'seeker.submit-message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seeker-submit-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\SeekerSendController@submitnew_message',
        'controller' => 'App\\Http\\Controllers\\Job\\SeekerSendController@submitnew_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'seeker.submit-message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'applicant.message.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'applicant-message-detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@applicantMessageDetail',
        'controller' => 'App\\Http\\Controllers\\UserController@applicantMessageDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'applicant.message.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.front.profile.cvs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-front-profile-cvs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@showProfileCvs',
        'controller' => 'App\\Http\\Controllers\\UserController@showProfileCvs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'show.front.profile.cvs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.cv.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-cv-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileCvForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileCvForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.cv.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.front.profile.cv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-front-profile-cv/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@storeProfileCv',
        'controller' => 'App\\Http\\Controllers\\UserController@storeProfileCv',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'store.front.profile.cv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.cv.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-cv-edit-form/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileCvEditForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileCvEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.cv.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.front.profile.cv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-front-profile-cv/{id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateFrontProfileCv',
        'controller' => 'App\\Http\\Controllers\\UserController@updateFrontProfileCv',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update.front.profile.cv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.front.profile.cv' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete-front-profile-cv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@deleteProfileCv',
        'controller' => 'App\\Http\\Controllers\\UserController@deleteProfileCv',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete.front.profile.cv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.front.profile.projects' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-front-profile-projects/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@showFrontProfileProjects',
        'controller' => 'App\\Http\\Controllers\\UserController@showFrontProfileProjects',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'show.front.profile.projects',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.applicant.profile.projects' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-applicant-profile-projects/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@showApplicantProfileProjects',
        'controller' => 'App\\Http\\Controllers\\UserController@showApplicantProfileProjects',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'show.applicant.profile.projects',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'upload.front.project.temp.image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'upload-front-project-temp-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@uploadProjectTempImage',
        'controller' => 'App\\Http\\Controllers\\UserController@uploadProjectTempImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'upload.front.project.temp.image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.project.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-project-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileProjectForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileProjectForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.project.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.front.profile.project' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-front-profile-project/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@storeFrontProfileProject',
        'controller' => 'App\\Http\\Controllers\\UserController@storeFrontProfileProject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'store.front.profile.project',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.project.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-project-edit-form/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileProjectEditForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileProjectEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.project.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.front.profile.project' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-front-profile-project/{id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateFrontProfileProject',
        'controller' => 'App\\Http\\Controllers\\UserController@updateFrontProfileProject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update.front.profile.project',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.front.profile.project' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete-front-profile-project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@deleteProfileProject',
        'controller' => 'App\\Http\\Controllers\\UserController@deleteProfileProject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete.front.profile.project',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.front.profile.experience' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-front-profile-experience/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@showFrontProfileExperience',
        'controller' => 'App\\Http\\Controllers\\UserController@showFrontProfileExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'show.front.profile.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.applicant.profile.experience' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-applicant-profile-experience/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@showApplicantProfileExperience',
        'controller' => 'App\\Http\\Controllers\\UserController@showApplicantProfileExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'show.applicant.profile.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.experience.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-experience-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileExperienceForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileExperienceForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.experience.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.front.profile.experience' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-front-profile-experience/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@storeFrontProfileExperience',
        'controller' => 'App\\Http\\Controllers\\UserController@storeFrontProfileExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'store.front.profile.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.experience.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-experience-edit-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileExperienceEditForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileExperienceEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.experience.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.front.profile.experience' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-front-profile-experience/{profile_experience_id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateFrontProfileExperience',
        'controller' => 'App\\Http\\Controllers\\UserController@updateFrontProfileExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update.front.profile.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.front.profile.experience' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete-front-profile-experience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@deleteProfileExperience',
        'controller' => 'App\\Http\\Controllers\\UserController@deleteProfileExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete.front.profile.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.front.profile.education' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-front-profile-education/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@showFrontProfileEducation',
        'controller' => 'App\\Http\\Controllers\\UserController@showFrontProfileEducation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'show.front.profile.education',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.applicant.profile.education' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-applicant-profile-education/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@showApplicantProfileEducation',
        'controller' => 'App\\Http\\Controllers\\UserController@showApplicantProfileEducation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'show.applicant.profile.education',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.education.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-education-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileEducationForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileEducationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.education.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.front.profile.education' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-front-profile-education/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@storeFrontProfileEducation',
        'controller' => 'App\\Http\\Controllers\\UserController@storeFrontProfileEducation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'store.front.profile.education',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.education.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-education-edit-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileEducationEditForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileEducationEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.education.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.front.profile.education' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-front-profile-education/{education_id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateFrontProfileEducation',
        'controller' => 'App\\Http\\Controllers\\UserController@updateFrontProfileEducation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update.front.profile.education',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.front.profile.education' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete-front-profile-education',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@deleteProfileEducation',
        'controller' => 'App\\Http\\Controllers\\UserController@deleteProfileEducation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete.front.profile.education',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.front.profile.skills' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-front-profile-skills/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@showProfileSkills',
        'controller' => 'App\\Http\\Controllers\\UserController@showProfileSkills',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'show.front.profile.skills',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.applicant.profile.skills' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-applicant-profile-skills/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@showApplicantProfileSkills',
        'controller' => 'App\\Http\\Controllers\\UserController@showApplicantProfileSkills',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'show.applicant.profile.skills',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.skill.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-skill-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileSkillForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileSkillForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.skill.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.front.profile.skill' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-front-profile-skill/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@storeFrontProfileSkill',
        'controller' => 'App\\Http\\Controllers\\UserController@storeFrontProfileSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'store.front.profile.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.skill.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-skill-edit-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileSkillEditForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileSkillEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.skill.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.front.profile.skill' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-front-profile-skill/{skill_id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateFrontProfileSkill',
        'controller' => 'App\\Http\\Controllers\\UserController@updateFrontProfileSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update.front.profile.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.front.profile.skill' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete-front-profile-skill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@deleteProfileSkill',
        'controller' => 'App\\Http\\Controllers\\UserController@deleteProfileSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete.front.profile.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.front.profile.languages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-front-profile-languages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@showProfileLanguages',
        'controller' => 'App\\Http\\Controllers\\UserController@showProfileLanguages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'show.front.profile.languages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.applicant.profile.languages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-applicant-profile-languages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@showApplicantProfileLanguages',
        'controller' => 'App\\Http\\Controllers\\UserController@showApplicantProfileLanguages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'show.applicant.profile.languages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.language.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-language-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileLanguageForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileLanguageForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.language.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.front.profile.language' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-front-profile-language/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@storeFrontProfileLanguage',
        'controller' => 'App\\Http\\Controllers\\UserController@storeFrontProfileLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'store.front.profile.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.front.profile.language.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-front-profile-language-edit-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getFrontProfileLanguageEditForm',
        'controller' => 'App\\Http\\Controllers\\UserController@getFrontProfileLanguageEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.front.profile.language.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.front.profile.language' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-front-profile-language/{language_id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateFrontProfileLanguage',
        'controller' => 'App\\Http\\Controllers\\UserController@updateFrontProfileLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update.front.profile.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.front.profile.language' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete-front.profile-language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@deleteProfileLanguage',
        'controller' => 'App\\Http\\Controllers\\UserController@deleteProfileLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete.front.profile.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my-alerts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my-alerts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@myAlerts',
        'controller' => 'App\\Http\\Controllers\\UserController@myAlerts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'my-alerts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete-alert' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete-alert/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@delete_alert',
        'controller' => 'App\\Http\\Controllers\\UserController@delete_alert',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete-alert',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u5RmtsbhYJLpoT1M' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::u5RmtsbhYJLpoT1M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pTufmX0Wyr7Zaibi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::pTufmX0Wyr7Zaibi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@showLoginForm',
        'as' => 'company.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@showLoginForm',
        'as' => 'company.login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.generated::no9E1VgoyuhoaL4n' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@login',
        'as' => 'company.generated::no9E1VgoyuhoaL4n',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\LoginController@logout',
        'as' => 'company.logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\RegisterController@showRegistrationForm',
        'as' => 'company.register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.generated::DRwB5X6HGwXDjUen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\RegisterController@register',
        'as' => 'company.generated::DRwB5X6HGwXDjUen',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'as' => 'company.password.request',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'company.password.email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\ResetPasswordController@showResetForm',
        'as' => 'company.password.reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.generated::WRV8ciYAoMkBBdEV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Company\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Company\\Auth\\ResetPasswordController@reset',
        'as' => 'company.generated::WRV8ciYAoMkBBdEV',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'as' => 'admin.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'as' => 'admin.login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.generated::finExcBjhjRVfS7t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@login',
        'as' => 'admin.generated::finExcBjhjRVfS7t',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@logout',
        'as' => 'admin.logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'as' => 'admin.password.request',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'admin.password.email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@showResetForm',
        'as' => 'admin.password.reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.generated::kr3uFeAl7YPVZsuN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@reset',
        'as' => 'admin.generated::kr3uFeAl7YPVZsuN',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blogs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\BlogController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'blogs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog-search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@search',
        'controller' => 'App\\Http\\Controllers\\BlogController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'blog-search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog-detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@details',
        'controller' => 'App\\Http\\Controllers\\BlogController@details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'blog-detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog-category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/category/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@categories',
        'controller' => 'App\\Http\\Controllers\\BlogController@categories',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'blog-category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company-change-message-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company-change-message-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyMessagesController@change_message_status',
        'controller' => 'App\\Http\\Controllers\\CompanyMessagesController@change_message_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company-change-message-status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'seeker-change-message-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seeker-change-message-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Job\\SeekerSendController@change_message_status',
        'controller' => 'App\\Http\\Controllers\\Job\\SeekerSendController@change_message_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'seeker-change-message-status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::K7hQS0Z5DFRUuRKY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@index',
        'controller' => 'App\\Http\\Controllers\\SitemapController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::K7hQS0Z5DFRUuRKY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8s2qx7qdaj0e7nhO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@companies',
        'controller' => 'App\\Http\\Controllers\\SitemapController@companies',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::8s2qx7qdaj0e7nhO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KlIzlAYwgd09ddpN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@clearCache',
        'controller' => 'App\\Http\\Controllers\\AdminController@clearCache',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::KlIzlAYwgd09ddpN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tinymce.image_upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tinymce-image_upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TinyMceController@uploadImage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TinyMceController@uploadImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'tinymce.image_upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.admin.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-admin-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@indexAdminUsers',
        'allowed_roles' => 'SUP_ADM',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@indexAdminUsers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.admin.users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.admin.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-admin-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@createAdminUser',
        'allowed_roles' => 'SUP_ADM',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@createAdminUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.admin.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.admin.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-admin-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@storeAdminUser',
        'allowed_roles' => 'SUP_ADM',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@storeAdminUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.admin.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.admin.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-admin-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@editAdminUser',
        'allowed_roles' => 'SUP_ADM',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@editAdminUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.admin.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.admin.user' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-admin-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@updateAdminUser',
        'allowed_roles' => 'SUP_ADM',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@updateAdminUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.admin.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.admin.user' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-admin-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@deleteAdminUser',
        'allowed_roles' => 'SUP_ADM',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@deleteAdminUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.admin.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.admin.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-admin-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@fetchAdminUsersData',
        'allowed_roles' => 'SUP_ADM',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@fetchAdminUsersData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.admin.users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@indexUsers',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@indexUsers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@createUser',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@createUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@storeUser',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@storeUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@editUser',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@editUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.user' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateUser',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.user' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@deleteUser',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@deleteUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@fetchUsersData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@fetchUsersData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.user' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@makeActiveUser',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@makeActiveUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.user' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@makeNotActiveUser',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@makeNotActiveUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.verified.user' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-verified-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@makeVerifiedUser',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@makeVerifiedUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.verified.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.verified.user' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-verified-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@makeNotVerifiedUser',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@makeNotVerifiedUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.verified.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.profile.summary' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update-profile-summary/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileSummary',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileSummary',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.profile.summary',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.profile.cvs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/show-profile-cvs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileCvs',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileCvs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'show.profile.cvs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'upload.cv.temp.image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/upload-cv-temp-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@uploadCvTempImage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@uploadCvTempImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'upload.cv.temp.image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.cv.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-cv-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileCvForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileCvForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.cv.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.profile.cv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-profile-cv/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileCv',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileCv',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.profile.cv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.cv.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-cv-edit-form/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileCvEditForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileCvEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.cv.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.profile.cv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update-profile-cv/{id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileCv',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileCv',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.profile.cv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.profile.cv' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-profile-cv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileCv',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileCv',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.profile.cv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.profile.projects' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/show-profile-projects/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileProjects',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileProjects',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'show.profile.projects',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'upload.project.temp.image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/upload-project-temp-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@uploadProjectTempImage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@uploadProjectTempImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'upload.project.temp.image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.project.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-project-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileProjectForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileProjectForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.project.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.profile.project' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-profile-project/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileProject',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileProject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.profile.project',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.project.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-project-edit-form/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileProjectEditForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileProjectEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.project.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.profile.project' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-profile-project/{id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileProject',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileProject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.profile.project',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.profile.project' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-profile-project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileProject',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileProject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.profile.project',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.profile.experience' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/show-profile-experience/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileExperience',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'show.profile.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.experience.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-experience-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileExperienceForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileExperienceForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.experience.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.profile.experience' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-profile-experience/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileExperience',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.profile.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.experience.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-experience-edit-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileExperienceEditForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileExperienceEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.experience.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.profile.experience' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-profile-experience/{profile_experience_id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileExperience',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.profile.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.profile.experience' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-profile-experience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileExperience',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.profile.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.profile.education' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/show-profile-education/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileEducation',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileEducation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'show.profile.education',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.education.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-education-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileEducationForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileEducationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.education.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.profile.education' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-profile-education/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileEducation',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileEducation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.profile.education',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.education.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-education-edit-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileEducationEditForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileEducationEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.education.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.profile.education' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-profile-education/{education_id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileEducation',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileEducation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.profile.education',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.profile.education' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-profile-education',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileEducation',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileEducation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.profile.education',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.profile.skills' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/show-profile-skills/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileSkills',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileSkills',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'show.profile.skills',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.skill.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-skill-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileSkillForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileSkillForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.skill.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.profile.skill' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-profile-skill/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileSkill',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.profile.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.skill.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-skill-edit-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileSkillEditForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileSkillEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.skill.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.profile.skill' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-profile-skill/{skill_id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileSkill',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.profile.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.profile.skill' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-profile-skill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileSkill',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.profile.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'show.profile.languages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/show-profile-languages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileLanguages',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@showProfileLanguages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'show.profile.languages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.language.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-language-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileLanguageForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileLanguageForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.language.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.profile.language' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-profile-language/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileLanguage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@storeProfileLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.profile.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.profile.language.edit.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-profile-language-edit-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileLanguageEditForm',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getProfileLanguageEditForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'get.profile.language.edit.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.profile.language' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-profile-language/{language_id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileLanguage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfileLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.profile.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.profile.language' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-profile-language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileLanguage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@deleteProfileLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.profile.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.faqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@indexFaqs',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@indexFaqs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.faqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@createFaq',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@createFaq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.faq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@storeFaq',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@storeFaq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-faq/{id}/{industry_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@editFaq',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@editFaq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.faq' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-faq/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@updateFaq',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@updateFaq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.faq' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@deleteFaq',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@deleteFaq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.faqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@fetchFaqsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@fetchFaqsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.faqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.faqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@sortFaqs',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@sortFaqs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.faqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'faq.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@faqSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@faqSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'faq.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'faq.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/faq-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@faqSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@faqSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'faq.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.seo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-seo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SeoController@indexSeo',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SeoController@indexSeo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.seo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.seo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-seo/{id}/{industry_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SeoController@editSeo',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SeoController@editSeo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.seo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.seo' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-seo/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SeoController@updateSeo',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SeoController@updateSeo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.seo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.seo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-seo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SeoController@fetchSeoData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SeoController@fetchSeoData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.seo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.cms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-cms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsController@indexCms',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsController@indexCms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.cms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.cms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-cms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsController@createCms',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsController@createCms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.cms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.cms' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-cms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsController@storeCms',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsController@storeCms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.cms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.cms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-cms/{id}/{industry_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsController@editCms',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsController@editCms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.cms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.cms' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-cms/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsController@updateCms',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsController@updateCms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.cms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.cms' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-cms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsController@deleteCms',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsController@deleteCms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.cms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.cms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-cms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsController@fetchCmsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsController@fetchCmsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.cms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.cmsContent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-cmsContent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsContentController@indexCmsContent',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsContentController@indexCmsContent',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.cmsContent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.cmsContent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-cmsContent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsContentController@createCmsContent',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsContentController@createCmsContent',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.cmsContent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.cmsContent' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-cmsContent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsContentController@storeCmsContent',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsContentController@storeCmsContent',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.cmsContent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.cmsContent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-cmsContent/{id}/{industry_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsContentController@editCmsContent',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsContentController@editCmsContent',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.cmsContent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.cmsContent' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-cmsContent/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsContentController@updateCmsContent',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsContentController@updateCmsContent',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.cmsContent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.cmsContent' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-cmsContent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsContentController@deleteCmsContent',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsContentController@deleteCmsContent',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.cmsContent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.cmsContent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-cmsContent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsContentController@fetchCmsContentData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsContentController@fetchCmsContentData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.cmsContent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.site.setting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-site-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SiteSettingController@editsiteSetting',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SiteSettingController@editsiteSetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.site.setting',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.site.setting' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-site-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SiteSettingController@updatesiteSetting',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SiteSettingController@updatesiteSetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.site.setting',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.career.levels' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-career-levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@indexCareerLevels',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@indexCareerLevels',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.career.levels',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.career.level' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-career-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@createCareerLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@createCareerLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.career.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.career.level' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-career-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@storeCareerLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@storeCareerLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.career.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.career.level' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-career-level/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@editCareerLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@editCareerLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.career.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.career.level' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-career-level/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@updateCareerLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@updateCareerLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.career.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.career.level' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-career-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@deleteCareerLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@deleteCareerLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.career.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.career.levels' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-career.levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@fetchCareerLevelsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@fetchCareerLevelsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.career.levels',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.career.level' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-career-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@makeActiveCareerLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@makeActiveCareerLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.career.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.career.level' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-career-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@makeNotActiveCareerLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@makeNotActiveCareerLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.career.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.career.levels' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-career-levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@sortCareerLevels',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@sortCareerLevels',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.career.levels',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'career.level.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/career-level-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@careerLevelSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@careerLevelSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'career.level.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'career.level.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/career-level-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@careerLevelSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CareerLevelController@careerLevelSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'career.level.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.countries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@indexCountries',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@indexCountries',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.countries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.country' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@createCountry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@createCountry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.country',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.country' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@storeCountry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@storeCountry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.country',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.country' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-country/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@editCountry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@editCountry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.country',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.country' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-country/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@updateCountry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@updateCountry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.country',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.country' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@deleteCountry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@deleteCountry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.country',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.countries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@fetchCountriesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@fetchCountriesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.countries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.country' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@makeActiveCountry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@makeActiveCountry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.country',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.country' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@makeNotActiveCountry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@makeNotActiveCountry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.country',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.countries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@sortCountries',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@sortCountries',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.countries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'country.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/country-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@countrySortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@countrySortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'country.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'country.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/country-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@countrySortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@countrySortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'country.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.country.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-country-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@indexCountryDetails',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@indexCountryDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.country.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.country.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-country-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@createCountryDetail',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@createCountryDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.country.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.country.detail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-country-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@storeCountryDetail',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@storeCountryDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.country.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.country.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-country-detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@editCountryDetail',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@editCountryDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.country.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.country.detail' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-country-detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@updateCountryDetail',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@updateCountryDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.country.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.country.detail' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-country-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@deleteCountryDetail',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@deleteCountryDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.country.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.country.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-country.details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@fetchCountryDetailsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@fetchCountryDetailsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.country.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.country.detail' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-country-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@makeActiveCountryDetail',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@makeActiveCountryDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.country.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.country.detail' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-country-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@makeNotActiveCountryDetail',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@makeNotActiveCountryDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.country.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.country.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-country-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@sortCountryDetails',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@sortCountryDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.country.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'country.detail.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/country-detail-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@countryDetailSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@countryDetailSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'country.detail.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'country.detail.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/country-detail-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@countryDetailSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryDetailController@countryDetailSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'country.detail.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.functional.areas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-functional-areas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@indexFunctionalAreas',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@indexFunctionalAreas',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.functional.areas',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.functional.area' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-functional-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@createFunctionalArea',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@createFunctionalArea',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.functional.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.functional.area' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-functional-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@storeFunctionalArea',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@storeFunctionalArea',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.functional.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.functional.area' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-functional-area/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@editFunctionalArea',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@editFunctionalArea',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.functional.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.functional.area' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-functional-area/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@updateFunctionalArea',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@updateFunctionalArea',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.functional.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.functional.area' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-functional-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@deleteFunctionalArea',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@deleteFunctionalArea',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.functional.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.functional.areas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-functional.areas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@fetchFunctionalAreasData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@fetchFunctionalAreasData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.functional.areas',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.functional.area' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-functional-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@makeActiveFunctionalArea',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@makeActiveFunctionalArea',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.functional.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.functional.area' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-functional-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@makeNotActiveFunctionalArea',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@makeNotActiveFunctionalArea',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.functional.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.functional.areas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-functional-areas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@sortFunctionalAreas',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@sortFunctionalAreas',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.functional.areas',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'functional.area.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/functional-area-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@functionalAreaSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@functionalAreaSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'functional.area.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'functional.area.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/functional-area-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@functionalAreaSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\FunctionalAreaController@functionalAreaSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'functional.area.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.genders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-genders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@indexGenders',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@indexGenders',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.genders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.gender' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-gender',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@createGender',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@createGender',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.gender',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.gender' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-gender',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@storeGender',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@storeGender',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.gender',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.gender' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-gender/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@editGender',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@editGender',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.gender',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.gender' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-gender/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@updateGender',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@updateGender',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.gender',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.gender' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-gender',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@deleteGender',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@deleteGender',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.gender',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.genders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-genders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@fetchGendersData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@fetchGendersData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.genders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.gender' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-gender',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@makeActiveGender',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@makeActiveGender',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.gender',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.gender' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-gender',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@makeNotActiveGender',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@makeNotActiveGender',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.gender',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.genders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-genders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@sortGenders',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@sortGenders',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.genders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gender.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gender-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@genderSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@genderSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'gender.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gender.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/gender-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GenderController@genderSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\GenderController@genderSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'gender.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.industries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-industries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@indexIndustries',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@indexIndustries',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.industries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.industry' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-industry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@createIndustry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@createIndustry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.industry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.industry' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-industry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@storeIndustry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@storeIndustry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.industry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.industry' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-industry/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@editIndustry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@editIndustry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.industry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.industry' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-industry/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@updateIndustry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@updateIndustry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.industry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.industry' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-industry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@deleteIndustry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@deleteIndustry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.industry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.industries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-industries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@fetchIndustriesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@fetchIndustriesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.industries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.industry' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-industry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@makeActiveIndustry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@makeActiveIndustry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.industry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.industry' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-industry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@makeNotActiveIndustry',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@makeNotActiveIndustry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.industry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.industries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-industries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@sortIndustries',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@sortIndustries',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.industries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'industry.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/industry-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@industrySortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@industrySortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'industry.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'industry.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/industry-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndustryController@industrySortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\IndustryController@industrySortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'industry.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.job.experiences' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-job-experiences',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@indexJobExperiences',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@indexJobExperiences',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.job.experiences',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.job.experience' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-job-experience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@createJobExperience',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@createJobExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.job.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.job.experience' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-job-experience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@storeJobExperience',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@storeJobExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.job.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.job.experience' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-job-experience/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@editJobExperience',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@editJobExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.job.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.job.experience' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-job-experience/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@updateJobExperience',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@updateJobExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.job.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.job.experience' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-job-experience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@deleteJobExperience',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@deleteJobExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.job.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.job.experiences' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-job.experiences',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@fetchJobExperiencesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@fetchJobExperiencesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.job.experiences',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.job.experience' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-job-experience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@makeActiveJobExperience',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@makeActiveJobExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.job.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.job.experience' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-job-experience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@makeNotActiveJobExperience',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@makeNotActiveJobExperience',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.job.experience',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.job.experiences' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-job-experiences',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@sortJobExperiences',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@sortJobExperiences',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.job.experiences',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.experience.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/job-experience-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@jobExperienceSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@jobExperienceSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'job.experience.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.experience.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/job-experience-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@jobExperienceSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobExperienceController@jobExperienceSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'job.experience.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.job.skills' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-job-skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@indexJobSkills',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@indexJobSkills',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.job.skills',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.job.skill' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-job-skill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@createJobSkill',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@createJobSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.job.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.job.skill' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-job-skill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@storeJobSkill',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@storeJobSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.job.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.job.skill' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-job-skill/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@editJobSkill',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@editJobSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.job.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.job.skill' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-job-skill/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@updateJobSkill',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@updateJobSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.job.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.job.skill' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-job-skill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@deleteJobSkill',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@deleteJobSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.job.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.job.skills' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-job.skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@fetchJobSkillsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@fetchJobSkillsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.job.skills',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.job.skill' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-job-skill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@makeActiveJobSkill',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@makeActiveJobSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.job.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.job.skill' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-job-skill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@makeNotActiveJobSkill',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@makeNotActiveJobSkill',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.job.skill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.job.skills' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-job-skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@sortJobSkills',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@sortJobSkills',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.job.skills',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.skill.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/job-skill-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@jobSkillSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@jobSkillSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'job.skill.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.skill.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/job-skill-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobSkillController@jobSkillSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobSkillController@jobSkillSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'job.skill.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.job.titles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-job-titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@indexJobTitles',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@indexJobTitles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.job.titles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.job.title' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-job-title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@createJobTitle',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@createJobTitle',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.job.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.job.title' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-job-title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@storeJobTitle',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@storeJobTitle',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.job.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.job.title' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-job-title/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@editJobTitle',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@editJobTitle',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.job.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.job.title' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-job-title/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@updateJobTitle',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@updateJobTitle',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.job.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.job.title' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-job-title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@deleteJobTitle',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@deleteJobTitle',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.job.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.job.titles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-job.titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@fetchJobTitlesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@fetchJobTitlesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.job.titles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.job.title' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-job-title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@makeActiveJobTitle',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@makeActiveJobTitle',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.job.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.job.title' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-job-title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@makeNotActiveJobTitle',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@makeNotActiveJobTitle',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.job.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.job.titles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-job-titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@sortJobTitles',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@sortJobTitles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.job.titles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.title.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/job-title-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@jobTitleSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@jobTitleSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'job.title.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.title.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/job-title-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTitleController@jobTitleSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTitleController@jobTitleSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'job.title.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.job.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-job-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@indexJobTypes',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@indexJobTypes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.job.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.job.type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-job-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@createJobType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@createJobType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.job.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.job.type' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-job-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@storeJobType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@storeJobType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.job.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.job.type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-job-type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@editJobType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@editJobType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.job.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.job.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-job-type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@updateJobType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@updateJobType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.job.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.job.type' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-job-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@deleteJobType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@deleteJobType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.job.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.job.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-job.types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@fetchJobTypesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@fetchJobTypesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.job.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.job.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-job-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@makeActiveJobType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@makeActiveJobType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.job.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.job.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-job-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@makeNotActiveJobType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@makeNotActiveJobType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.job.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.job.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-job-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@sortJobTypes',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@sortJobTypes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.job.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.type.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/job-type-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@jobTypeSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@jobTypeSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'job.type.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.type.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/job-type-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobTypeController@jobTypeSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobTypeController@jobTypeSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'job.type.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.job.shifts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-job-shifts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@indexJobShifts',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@indexJobShifts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.job.shifts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.job.shift' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-job-shift',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@createJobShift',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@createJobShift',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.job.shift',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.job.shift' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-job-shift',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@storeJobShift',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@storeJobShift',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.job.shift',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.job.shift' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-job-shift/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@editJobShift',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@editJobShift',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.job.shift',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.job.shift' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-job-shift/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@updateJobShift',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@updateJobShift',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.job.shift',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.job.shift' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-job-shift',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@deleteJobShift',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@deleteJobShift',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.job.shift',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.job.shifts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-job.shifts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@fetchJobShiftsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@fetchJobShiftsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.job.shifts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.job.shift' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-job-shift',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@makeActiveJobShift',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@makeActiveJobShift',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.job.shift',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.job.shift' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-job-shift',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@makeNotActiveJobShift',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@makeNotActiveJobShift',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.job.shift',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.job.shifts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-job-shifts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@sortJobShifts',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@sortJobShifts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.job.shifts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.shift.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/job-shift-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@jobShiftSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@jobShiftSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'job.shift.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'job.shift.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/job-shift-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobShiftController@jobShiftSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobShiftController@jobShiftSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'job.shift.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.degree.levels' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-degree-levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@indexDegreeLevels',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@indexDegreeLevels',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.degree.levels',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.degree.level' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-degree-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@createDegreeLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@createDegreeLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.degree.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.degree.level' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-degree-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@storeDegreeLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@storeDegreeLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.degree.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.degree.level' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-degree-level/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@editDegreeLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@editDegreeLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.degree.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.degree.level' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-degree-level/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@updateDegreeLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@updateDegreeLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.degree.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.degree.level' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-degree-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@deleteDegreeLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@deleteDegreeLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.degree.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.degree.levels' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-degree.levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@fetchDegreeLevelsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@fetchDegreeLevelsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.degree.levels',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.degree.level' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-degree-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@makeActiveDegreeLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@makeActiveDegreeLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.degree.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.degree.level' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-degree-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@makeNotActiveDegreeLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@makeNotActiveDegreeLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.degree.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.degree.levels' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-degree-levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@sortDegreeLevels',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@sortDegreeLevels',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.degree.levels',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'degree.level.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/degree-level-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@degreeLevelSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@degreeLevelSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'degree.level.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'degree.level.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/degree-level-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@degreeLevelSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeLevelController@degreeLevelSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'degree.level.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.degree.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-degree-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@indexDegreeTypes',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@indexDegreeTypes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.degree.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.degree.type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-degree-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@createDegreeType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@createDegreeType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.degree.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.degree.type' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-degree-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@storeDegreeType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@storeDegreeType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.degree.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.degree.type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-degree-type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@editDegreeType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@editDegreeType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.degree.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.degree.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-degree-type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@updateDegreeType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@updateDegreeType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.degree.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.degree.type' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-degree-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@deleteDegreeType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@deleteDegreeType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.degree.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.degree.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-degree.types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@fetchDegreeTypesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@fetchDegreeTypesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.degree.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.degree.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-degree-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@makeActiveDegreeType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@makeActiveDegreeType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.degree.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.degree.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-degree-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@makeNotActiveDegreeType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@makeNotActiveDegreeType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.degree.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.degree.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-degree-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@sortDegreeTypes',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@sortDegreeTypes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.degree.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'degree.type.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/degree-type-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@degreeTypeSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@degreeTypeSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'degree.type.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'degree.type.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/degree-type-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@degreeTypeSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\DegreeTypeController@degreeTypeSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'degree.type.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.major.subjects' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-major-subjects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@indexMajorSubjects',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@indexMajorSubjects',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.major.subjects',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.major.subject' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-major-subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@createMajorSubject',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@createMajorSubject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.major.subject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.major.subject' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-major-subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@storeMajorSubject',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@storeMajorSubject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.major.subject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.major.subject' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-major-subject/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@editMajorSubject',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@editMajorSubject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.major.subject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.major.subject' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-major-subject/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@updateMajorSubject',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@updateMajorSubject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.major.subject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.major.subject' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-major-subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@deleteMajorSubject',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@deleteMajorSubject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.major.subject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.major.subjects' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-major.subjects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@fetchMajorSubjectsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@fetchMajorSubjectsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.major.subjects',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.major.subject' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-major-subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@makeActiveMajorSubject',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@makeActiveMajorSubject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.major.subject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.major.subject' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-major-subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@makeNotActiveMajorSubject',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@makeNotActiveMajorSubject',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.major.subject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.major.subjects' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-major-subjects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@sortMajorSubjects',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@sortMajorSubjects',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.major.subjects',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'major.subject.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/major-subject-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@majorSubjectSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@majorSubjectSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'major.subject.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'major.subject.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/major-subject-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@majorSubjectSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MajorSubjectController@majorSubjectSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'major.subject.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.languages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@indexLanguages',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@indexLanguages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.languages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.language' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@createLanguage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@createLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.language' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@storeLanguage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@storeLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.language' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-language/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@editLanguage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@editLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.language' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-language/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@updateLanguage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@updateLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.language' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@deleteLanguage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@deleteLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.languages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@fetchLanguagesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@fetchLanguagesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.languages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.language' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@makeActiveLanguage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@makeActiveLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.default.language' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-default-language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@makeDefaultLanguage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@makeDefaultLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.default.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.language' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@makeNotActiveLanguage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@makeNotActiveLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.states' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@indexStates',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@indexStates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.states',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.state' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@createState',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@createState',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.state' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@storeState',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@storeState',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.state' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-state/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@editState',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@editState',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.state' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-state/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@updateState',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@updateState',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.state' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@deleteState',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@deleteState',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.states' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@fetchStatesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@fetchStatesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.states',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.state' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@makeActiveState',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@makeActiveState',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.state' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@makeNotActiveState',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@makeNotActiveState',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.states' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@sortStates',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@sortStates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.states',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'state.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/state-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@stateSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@stateSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'state.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'state.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/state-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@stateSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@stateSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'state.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.cities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@indexCities',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@indexCities',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.cities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.city' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@createCity',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@createCity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.city' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@storeCity',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@storeCity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.city' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-city/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@editCity',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@editCity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.city' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-city/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@updateCity',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@updateCity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.city' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@deleteCity',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@deleteCity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.cities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@fetchCitiesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@fetchCitiesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.cities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.city' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@makeActiveCity',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@makeActiveCity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.city' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@makeNotActiveCity',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@makeNotActiveCity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.cities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@sortCities',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@sortCities',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.cities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'city.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/city-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@citySortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@citySortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'city.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'city.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/city-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@citySortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@citySortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'city.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.result.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-result-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@indexResultTypes',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@indexResultTypes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.result.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.result.type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-result-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@createResultType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@createResultType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.result.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.result.type' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-result-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@storeResultType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@storeResultType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.result.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.result.type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-result-type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@editResultType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@editResultType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.result.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.result.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-result-type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@updateResultType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@updateResultType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.result.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.result.type' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-result-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@deleteResultType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@deleteResultType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.result.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.result.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-result.types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@fetchResultTypesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@fetchResultTypesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.result.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.result.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-result-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@makeActiveResultType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@makeActiveResultType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.result.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.result.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-result-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@makeNotActiveResultType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@makeNotActiveResultType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.result.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.result.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-result-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@sortResultTypes',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@sortResultTypes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.result.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'result.type.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/result-type-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@resultTypeSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@resultTypeSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'result.type.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'result.type.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/result-type-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@resultTypeSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ResultTypeController@resultTypeSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'result.type.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.language.levels' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-language-levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@indexLanguageLevels',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@indexLanguageLevels',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.language.levels',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.language.level' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-language-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@createLanguageLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@createLanguageLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.language.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.language.level' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-language-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@storeLanguageLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@storeLanguageLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.language.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.language.level' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-language-level/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@editLanguageLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@editLanguageLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.language.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.language.level' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-language-level/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@updateLanguageLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@updateLanguageLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.language.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.language.level' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-language-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@deleteLanguageLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@deleteLanguageLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.language.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.language.levels' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-language.levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@fetchLanguageLevelsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@fetchLanguageLevelsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.language.levels',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.language.level' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-language-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@makeActiveLanguageLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@makeActiveLanguageLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.language.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.language.level' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-language-level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@makeNotActiveLanguageLevel',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@makeNotActiveLanguageLevel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.language.level',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.language.levels' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-language-levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@sortLanguageLevels',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@sortLanguageLevels',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.language.levels',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'language.level.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/language-level-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@languageLevelSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@languageLevelSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'language.level.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'language.level.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/language-level-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@languageLevelSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageLevelController@languageLevelSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'language.level.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.marital.statuses' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-marital-statuses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@indexMaritalStatuses',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@indexMaritalStatuses',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.marital.statuses',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.marital.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-marital-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@createMaritalStatus',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@createMaritalStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.marital.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.marital.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-marital-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@storeMaritalStatus',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@storeMaritalStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.marital.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.marital.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-marital-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@editMaritalStatus',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@editMaritalStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.marital.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.marital.status' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-marital-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@updateMaritalStatus',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@updateMaritalStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.marital.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.marital.status' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-marital-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@deleteMaritalStatus',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@deleteMaritalStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.marital.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.marital.statuses' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-marital.statuses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@fetchMaritalStatusesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@fetchMaritalStatusesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.marital.statuses',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.marital.status' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-marital-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@makeActiveMaritalStatus',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@makeActiveMaritalStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.marital.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.marital.status' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-marital-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@makeNotActiveMaritalStatus',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@makeNotActiveMaritalStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.marital.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.marital.statuses' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-marital-statuses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@sortMaritalStatuses',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@sortMaritalStatuses',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.marital.statuses',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'marital.status.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marital-status-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@maritalStatusSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@maritalStatusSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'marital.status.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'marital.status.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/marital-status-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@maritalStatusSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\MaritalStatusController@maritalStatusSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'marital.status.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.companies' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@indexCompanies',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@indexCompanies',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.companies',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.payment.hostory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-payment-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@indexCompaniesHistory',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@indexCompaniesHistory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.payment.hostory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.companiesHistory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-payment-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@fetchCompaniesHistory',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@fetchCompaniesHistory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.companiesHistory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@createCompany',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@createCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.company' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@storeCompany',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@storeCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-company/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@editCompany',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@editCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.company' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-company/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@updateCompany',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@updateCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.company' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@deleteCompany',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@deleteCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.companies' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@fetchCompaniesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@fetchCompaniesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.companies',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.company' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@makeActiveCompany',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@makeActiveCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.company' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@makeNotActiveCompany',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@makeNotActiveCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.featured.company' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-featured-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@makeFeaturedCompany',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@makeFeaturedCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.featured.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.featured.company' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-featured-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@makeNotFeaturedCompany',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@makeNotFeaturedCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.featured.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.paid.company' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-paid-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@makePaidCompany',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@makePaidCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.paid.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.paid.company' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-paid-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@makeNotPaidCompany',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@makeNotPaidCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.paid.company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.ownership.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-ownership-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@indexOwnershipTypes',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@indexOwnershipTypes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.ownership.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.ownership.type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-ownership-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@createOwnershipType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@createOwnershipType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.ownership.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.ownership.type' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-ownership-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@storeOwnershipType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@storeOwnershipType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.ownership.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.ownership.type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-ownership-type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@editOwnershipType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@editOwnershipType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.ownership.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.ownership.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-ownership-type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@updateOwnershipType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@updateOwnershipType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.ownership.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.ownership.type' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-ownership-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@deleteOwnershipType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@deleteOwnershipType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.ownership.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.ownership.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-ownership.types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@fetchOwnershipTypesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@fetchOwnershipTypesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.ownership.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.ownership.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-ownership-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@makeActiveOwnershipType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@makeActiveOwnershipType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.ownership.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.ownership.type' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-ownership-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@makeNotActiveOwnershipType',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@makeNotActiveOwnershipType',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.ownership.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.ownership.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-ownership-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@sortOwnershipTypes',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@sortOwnershipTypes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.ownership.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ownership.type.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ownership-type-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@ownershipTypeSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@ownershipTypeSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'ownership.type.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ownership.type.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/ownership-type-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@ownershipTypeSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\OwnershipTypeController@ownershipTypeSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'ownership.type.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.jobs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@indexJobs',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@indexJobs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.jobs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pending_approval.jobs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pending-approval-jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@pendingApprovalJobs',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@pendingApprovalJobs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'pending_approval.jobs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.job' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@createJob',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@createJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.job' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@storeJob',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@storeJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.job' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-job/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@editJob',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@editJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.job' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-job/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@updateJob',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@updateJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.job' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@deleteJob',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@deleteJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.jobs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@fetchJobsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@fetchJobsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.jobs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.pending_jobs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-pending-jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@fetchPendingJobsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@fetchPendingJobsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.pending_jobs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.job' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@makeActiveJob',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@makeActiveJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.approve.job' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-approve-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@makeApproveJob',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@makeApproveJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.approve.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.job' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@makeNotActiveJob',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@makeNotActiveJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.featured.job' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-featured-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@makeFeaturedJob',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@makeFeaturedJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.featured.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.featured.job' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-featured-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\JobController@makeNotFeaturedJob',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\JobController@makeNotFeaturedJob',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.featured.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.salary.periods' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-salary-periods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@indexSalaryPeriods',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@indexSalaryPeriods',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.salary.periods',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.salary.period' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-salary-period',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@createSalaryPeriod',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@createSalaryPeriod',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.salary.period',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.salary.period' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-salary-period',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@storeSalaryPeriod',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@storeSalaryPeriod',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.salary.period',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.salary.period' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-salary-period/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@editSalaryPeriod',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@editSalaryPeriod',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.salary.period',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.salary.period' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-salary-period/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@updateSalaryPeriod',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@updateSalaryPeriod',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.salary.period',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.salary.period' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-salary-period',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@deleteSalaryPeriod',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@deleteSalaryPeriod',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.salary.period',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.salary.periods' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-salary.periods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@fetchSalaryPeriodsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@fetchSalaryPeriodsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.salary.periods',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.salary.period' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-salary-period',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@makeActiveSalaryPeriod',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@makeActiveSalaryPeriod',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.salary.period',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.salary.period' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-salary-period',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@makeNotActiveSalaryPeriod',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@makeNotActiveSalaryPeriod',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.salary.period',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.salary.periods' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-salary-periods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@sortSalaryPeriods',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@sortSalaryPeriods',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.salary.periods',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salary.period.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salary-period-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@salaryPeriodSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@salaryPeriodSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'salary.period.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salary.period.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/salary-period-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@salaryPeriodSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SalaryPeriodController@salaryPeriodSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'salary.period.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.contact.message' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-contact-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactMessageController@indexContactMessage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactMessageController@indexContactMessage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.contact.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.contact.message' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-contact.message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactMessageController@fetchContactMessageData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactMessageController@fetchContactMessageData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.contact.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.packages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-packages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PackageController@indexPackages',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\PackageController@indexPackages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.packages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.package' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PackageController@createPackage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\PackageController@createPackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.package' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PackageController@storePackage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\PackageController@storePackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.package' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-package/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PackageController@editPackage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\PackageController@editPackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.package' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-package/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PackageController@updatePackage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\PackageController@updatePackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.package' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PackageController@deletePackage',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\PackageController@deletePackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.packages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-packages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PackageController@fetchPackagesData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\PackageController@fetchPackagesData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.packages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.videos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@indexVideos',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@indexVideos',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.videos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.video' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@createVideo',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@createVideo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.video',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.video' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@storeVideo',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@storeVideo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.video',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.video' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-video/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@editVideo',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@editVideo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.video',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.video' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-video/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@updateVideo',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@updateVideo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.video',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.video' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@deleteVideo',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@deleteVideo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.video',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.videos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@fetchVideosData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@fetchVideosData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.videos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.video' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@makeActiveVideo',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@makeActiveVideo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.video',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.video' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@makeNotActiveVideo',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@makeNotActiveVideo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.video',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.videos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@sortVideos',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@sortVideos',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.videos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'video.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/video-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@videoSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@videoSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'video.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'video.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/video-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoController@videoSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoController@videoSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'video.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.testimonials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@indexTestimonials',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@indexTestimonials',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.testimonials',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@createTestimonial',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@createTestimonial',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@storeTestimonial',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@storeTestimonial',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-testimonial/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@editTestimonial',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@editTestimonial',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-testimonial/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@updateTestimonial',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@updateTestimonial',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@deleteTestimonial',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@deleteTestimonial',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.testimonials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@fetchTestimonialsData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@fetchTestimonialsData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.testimonials',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@makeActiveTestimonial',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@makeActiveTestimonial',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@makeNotActiveTestimonial',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@makeNotActiveTestimonial',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.testimonials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@sortTestimonials',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@sortTestimonials',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.testimonials',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'testimonial.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/testimonial-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@testimonialSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@testimonialSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'testimonial.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'testimonial.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/testimonial-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@testimonialSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@testimonialSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'testimonial.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'list.sliders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/list-sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@indexSliders',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@indexSliders',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'list.sliders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create.slider' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@createSlider',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@createSlider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'create.slider',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store.slider' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store-slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@storeSlider',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@storeSlider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'store.slider',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit.slider' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-slider/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@editSlider',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@editSlider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit.slider',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update.slider' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update-slider/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@updateSlider',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@updateSlider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'update.slider',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete.slider' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete-slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@deleteSlider',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@deleteSlider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'delete.slider',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'fetch.data.sliders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fetch-sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@fetchSlidersData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@fetchSlidersData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'fetch.data.sliders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.active.slider' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-active-slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@makeActiveSlider',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@makeActiveSlider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.active.slider',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.not.active.slider' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/make-not-active-slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@makeNotActiveSlider',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@makeNotActiveSlider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'make.not.active.slider',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sort.sliders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sort-sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@sortSliders',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@sortSliders',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'sort.sliders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slider.sort.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider-sort-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@sliderSortData',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@sliderSortData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'slider.sort.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slider.sort.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/slider-sort-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@sliderSortUpdate',
        'allowed_roles' => 
        array (
          0 => 'SUP_ADM',
          1 => 'SUB_ADM',
        ),
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@sliderSortUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'slider.sort.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9LKUVOmyebP8QJ9n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog_categoriesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog_categoriesController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9LKUVOmyebP8QJ9n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EegQuUS9D5fP8yyH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog_category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog_categoriesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog_categoriesController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EegQuUS9D5fP8yyH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Zg87W6XO29zGarRS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog_categoriesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog_categoriesController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Zg87W6XO29zGarRS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YJ4CBMUxHHeTev9E' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog_category/{blog_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog_categoriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog_categoriesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YJ4CBMUxHHeTev9E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xg8ZU9Q44h6zeh8I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_category/get_blog_category_by_id/{blog_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog_categoriesController@get_blog_category_by_id',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog_categoriesController@get_blog_category_by_id',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xg8ZU9Q44h6zeh8I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogsController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'add-new-blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/add-new-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogsController@show_form',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogsController@show_form',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'add-new-blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gkvRjXBiPYEtbCJW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogsController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gkvRjXBiPYEtbCJW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rdCWdQ985e9UpkiZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogsController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::rdCWdQ985e9UpkiZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::r5hFyD9DzmrmpDyH' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::r5hFyD9DzmrmpDyH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::N0hmO8TQNUHlzkh7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/remove_blog_feature_image/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogsController@remove_blog_feature_image',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogsController@remove_blog_feature_image',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::N0hmO8TQNUHlzkh7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mhToTfoh8izqvVKz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/get_blog_by_id/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogsController@get_blog_by_id',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogsController@get_blog_by_id',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mhToTfoh8izqvVKz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit-blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/edit-blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
          3 => 'checkAdminRoles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogsController@get_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogsController@get_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'edit-blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
