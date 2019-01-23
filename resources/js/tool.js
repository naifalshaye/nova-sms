Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'nova-sms',
            path: '/nova-sms',
            component: require('./components/Tool'),
        },
    ])
})
