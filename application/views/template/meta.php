<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title ?></title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/select2/css/select2.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/bs-stepper/css/bs-stepper.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/dropzone/min/dropzone.min.css">

    <script nonce="a0534ee1-5e62-47d0-aa20-16d5fbec99a9">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = {
                    deferred: []
                }, a.zaraz.q = [], a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.x = Math.random(), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.zarazData.q = []; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }, ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">