
    var redirects = [
        ['/about/',        '/#about'],
        ['/about',        '/#about'],
        ['/our_services/', '/#services'],
        ['/our_services', '/#services'],
        ['/partners/',     '/#project'],
        ['/partners',     '/#project'],
        ['/publications/', '/#publication'],
        ['/publications', '/#publication'],
        ['/blog/',         '/category/all'],
        ['/blog',          '/category/all'],
        ['/contact/',      '/#contact'],
        ['/contact',       '/#contact']
    ]

    for (var i=0; i<redirects.length; i++) {
        if (window.location.pathname == redirects[i][0]) {
           window.location.replace(redirects[i][1]);
        }
    }