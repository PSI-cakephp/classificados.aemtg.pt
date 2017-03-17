<div class="modal load"><!-- Place at bottom of page --></div>
<style>
.load {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 )
                url('http://i.stack.imgur.com/FhHRx.gif')
                50% 50%
                no-repeat;
}
body.loading {
    overflow: hidden;
}
body.loading .load {
    display: block;
}
</style>
