/*
 * This call registers your application to be launched when the browser is ready.
 */
Ext.application({
    name: 'App',

    requires:[
        'App.view.MainView'
    ],

    mainView: 'App.view.MainView'
});
