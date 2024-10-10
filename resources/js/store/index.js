import { createStore } from 'vuex'
import productsModule from './products/index'

const store = createStore({
    modules: {
        productsModule
    }
})

export default store
