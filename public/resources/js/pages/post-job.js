"use strict";

function PostJobsClass(element) {
    var $element = $(element);
    var api = $('body').data('api');
    if (!$element.length || typeof Vue == 'undefined') {
        return null;
    }
    Vue.use(VueForm);
    const vue = new Vue({
        el: element,
        data: {
            formstate: {},
            data: {
                title: '',
                description: '',
                industry_ids: [],
                job_level_ids: [],
                job_type_ids: [],

            },
            resources: {
                cities: [],
                countries: [],
                industries: [],
                job_types: [],
                job_levels: [],
                city_id : '',
            }
        },
        methods: {},
        mounted: function () {
            var _this = this;
            $.post(api + '/resources', {'action': 'post-job'})
                .done(function (res) {
                    if (res.success) {
                        window.RaoViecApp.$view.mappingResource(res.data, _this.resources);
                        _this.$forceUpdate();
                    }
                });
        }
    });
    return vue;
}

window.PostJob = new PostJobsClass('#app-post-job');