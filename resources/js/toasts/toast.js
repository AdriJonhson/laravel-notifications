import Vue from 'vue'
import CxltToastr from 'cxlt-vue2-toastr'
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css'

var toastrConfigs = {
    position: 'bottom right',
    timeOut: 4000,
}

Vue.use(CxltToastr, toastrConfigs)

export default{}