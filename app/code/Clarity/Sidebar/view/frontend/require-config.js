var config = {
    deps: [
        "js/main",
        "js/clarity_sidebar",
    ],
    map: {
        '*': {
            clarity_sidebar: 'Clarity_Sidebar/js/clarity_sidebar',
            bootstrap_bundle: 'Clarity_Sidebar/js/bootstrap.bundle.min'
        }
    },
    paths: {
        'clarity_sidebar': 'js/clarity_sidebar',
    },
    shim: {
        'clarity_sidebar': ['jquery'],
        'bootstrap_bundle': ['jquery']
    }
};