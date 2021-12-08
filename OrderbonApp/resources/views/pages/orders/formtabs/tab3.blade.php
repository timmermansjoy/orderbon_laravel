<div class="row">
    <div class="col">
        <div class="form-group form-file-upload form-file-simple">
            <input type="text" class="form-control inputFileVisible" placeholder="Simple chooser...">
            <input type="file" class="inputFileHidden">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="sign_first_name">Voornaam Ondergetekende</label>
            <input type="text" class="form-control" name="sign_first_name" id="sign_first_name" autocomplete="off"
                value="{{old('sign_first_name') ?? $order->sign_first_name ?? ""}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="sign_last_name">Naam Ondergetekende</label>
            <input type="text" class="form-control" name="sign_last_name" id="sign_last_name" autocomplete="off"
                value="{{old('sign_last_name') ?? $order->sign_last_name ?? ""}}">
        </div>
    </div>
</div>

<div class="row justify-content-center">
    @if (!$order->signiture)
    <div class="col">
        <canvas id="sig-canvas" height="160px" style="border: 2px dotted #CCCCCC;
        border-radius: 15px;
        cursor: crosshair;">
            Browser does not support this signing feature
        </canvas>
        <button class="btn btn-default" type="button" id="sig-clearBtn">Clear Signature</button>


    </div>
    @else
    <div class="col">
        <img id="sig-image" src="{{$order->signiture}}" alt="Your signature will go here!" />
    </div>
    @endif
    <textarea id="sig-dataUrl" name="signiture" class="form-control" rows="5"
        style="display: none">{{old('signiture') ?? $order->signiture}}</textarea>
</div>


<div class="row justify-content-center">
    <div class="col">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="">
                Ondergetekende verklaard op eer tekenbevoegd te zijn om dit order onherroepelijk als voldaan en akkoord
                te
                beschouwen.*
                <span class="form-check-sign">
                    <span class="check"></span>
                </span>
            </label>
        </div>
    </div>
</div>


@push('scripts')
{{-- <script src="{{asset('js/sign.js')}}"></script> --}}
<script>
    (function() {
    window.requestAnimFrame = (function(callback) {
        return (
            window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            window.oRequestAnimationFrame ||
            window.msRequestAnimaitonFrame ||
            function(callback) {
                window.setTimeout(callback, 1000 / 60);
            }
        );
    })();

    var canvas = document.getElementById("sig-canvas");
    var ctx = canvas.getContext("2d");
    ctx.strokeStyle = "#222222";
    ctx.lineWidth = 4;

    var drawing = false;
    var mousePos = {
        x: 0,
        y: 0
    };
    var lastPos = mousePos;

    canvas.addEventListener(
        "mousedown",
        function(e) {
            drawing = true;
            lastPos = getMousePos(canvas, e);
        },
        false
    );

    canvas.addEventListener(
        "mouseup",
        function(e) {
            drawing = false;
            var dataUrl = canvas.toDataURL();
            sigText.innerHTML = dataUrl;
            sigImage.setAttribute("src", dataUrl);
        },
        false
    );

    canvas.addEventListener(
        "mousemove",
        function(e) {
            mousePos = getMousePos(canvas, e);
        },
        false
    );

    // Add touch event support for mobile
    canvas.addEventListener("touchstart", function(e) {}, false);

    canvas.addEventListener(
        "touchmove",
        function(e) {
            var touch = e.touches[0];
            var me = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(me);
        },
        false
    );

    canvas.addEventListener(
        "touchstart",
        function(e) {
            mousePos = getTouchPos(canvas, e);
            var touch = e.touches[0];
            var me = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(me);
        },
        false
    );

    canvas.addEventListener(
        "touchend",
        function(e) {
            var me = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(me);
        },
        false
    );

    function getMousePos(canvasDom, mouseEvent) {
        var rect = canvasDom.getBoundingClientRect();
        return {
            x: mouseEvent.clientX - rect.left,
            y: mouseEvent.clientY - rect.top
        };
    }

    function getTouchPos(canvasDom, touchEvent) {
        var rect = canvasDom.getBoundingClientRect();
        return {
            x: touchEvent.touches[0].clientX - rect.left,
            y: touchEvent.touches[0].clientY - rect.top
        };
    }

    function renderCanvas() {
        if (drawing) {
            ctx.moveTo(lastPos.x, lastPos.y);
            ctx.lineTo(mousePos.x, mousePos.y);
            ctx.stroke();
            lastPos = mousePos;
        }
    }

    // Prevent scrolling when touching the canvas
    document.body.addEventListener(
        "touchstart",
        function(e) {
            if (e.target == canvas) {
                e.preventDefault();
            }
        },
        false
    );

    document.body.addEventListener(
        "touchend",
        function(e) {
            if (e.target == canvas) {
                e.preventDefault();
            }
        },
        false
    );

    document.body.addEventListener(
        "touchmove",
        function(e) {
            if (e.target == canvas) {
                e.preventDefault();
            }
        },
        false
    );

    (function drawLoop() {
        requestAnimFrame(drawLoop);
        renderCanvas();
    })();

    function clearCanvas() {
        canvas.width = canvas.width;
    }

    // Set up the UI
    var sigText = document.getElementById("sig-dataUrl");
    var sigImage = document.getElementById("sig-image");
    var clearBtn = document.getElementById("sig-clearBtn");
    var submitBtn = document.getElementById("sig-submitBtn");

    clearBtn.addEventListener(
        "click",
        function(e) {
            clearCanvas();
            sigText.innerHTML = "";
            sigImage.setAttribute("src", "");
        },
        false
    );

    submitBtn.addEventListener(
        "click",
        function(e) {
            var dataUrl = canvas.toDataURL();
            sigText.innerHTML = dataUrl;
            sigImage.setAttribute("src", dataUrl);
        },
        false
    );
})();
</script>
@endpush
