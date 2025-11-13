<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('setting.google_analytics_id') }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
        dataLayer.push({
            event: "gtm.init_consent",
            consent: {
                ad_storage: "denied",
                analytics_storage: "denied",
                functionality_storage: "denied",
                personalization_storage: "denied",
                security_storage: "denied"
            }
        });
        dataLayer.push({
            event: "gtm.init_consent",
            consent: {
                ad_storage: "granted",
                analytics_storage: "granted",
                functionality_storage: "granted",
                personalization_storage: "granted",
                security_storage: "granted"
            }
        });
    }
    gtag('js', new Date());

    gtag('config', "{{ config('setting.google_analytics_id') }}");
</script>
<script type="text/javascript">
    (function (c, l, a, r, i, t, y) {
        c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
        t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "{{ config('setting.ms_clarity_project_id') }}");
</script>