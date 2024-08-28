@extends('template.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0">
                <div class="card-header bg-transparent text-center">
                    <h3 class="card-title" style="font-size: 1.75rem; font-weight: bold; color: #28a745;">Buku Tamu</h3>
                    <a href="{{ url('admin/bukutamu') }}" class="btn btn-success float-right mb-3">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <form action="{{ url('admin/bukutamu') }}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="card-body p-4">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                            </div>
                            <input type="text" class="form-control" name="asal" placeholder="Asal" required>
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-info"></i></span>
                            </div>
                            <input type="text" class="form-control" name="keperluan" placeholder="Keperluan" required>
                        </div>

                        <!-- Menampilkan kamera langsung di halaman -->
                        <div class="form-group text-center">
                            <video id="video" width="640" height="480" autoplay class="border rounded mb-3" style="box-shadow: 0 4px 8px rgba(0,0,0,0.1);"></video>
                            <div>
                                <button type="button" id="captureButton" class="btn btn-success mt-2">
                                    <i class="fa fa-camera"></i> Ambil Foto dari Kamera
                                </button>
                                <canvas id="canvas" width="640" height="480" style="display:none;"></canvas>
                                <input type="hidden" id="foto_text" name="foto">
                                <img id="capturedImage" src="" class="img-fluid mt-3 border rounded" style="display:none; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent text-right">
                        <button type="submit" class="btn btn-success" id="submitButton" style="display: none;">
                            <span class="fa fa-save"></span> Simpan
                        </button>
                        <button id="retakeButton" class="btn btn-danger mt-2" style="display: none;" type="button">
                            <i class="fa fa-undo"></i> Ambil Ulang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        var video = document.getElementById('video');
        var canvas = document.getElementById('canvas');
        var context = canvas.getContext('2d');
        var captureButton = document.getElementById('captureButton');
        var retakeButton = document.getElementById('retakeButton');
        var submitButton = document.getElementById('submitButton');
        var capturedImage = document.getElementById('capturedImage');

        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function(stream) {
                video.srcObject = stream;
                video.play();
            })
            .catch(function(err) {
                console.log("Tidak dapat mengakses kamera:", err);
            });

        captureButton.addEventListener('click', function() {
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            capturedImage.src = canvas.toDataURL('image/png');
            video.style.display = 'none';
            capturedImage.style.display = 'block';
            captureButton.style.display = 'none';
            retakeButton.style.display = 'block';
            submitButton.style.display = 'block';
            $("#foto_text").val(canvas.toDataURL('image/png'));
        });

        retakeButton.addEventListener('click', function() {
            capturedImage.src = '';
            video.style.display = 'block';
            capturedImage.style.display = 'none';
            captureButton.style.display = 'block';
            retakeButton.style.display = 'none';
            submitButton.style.display = 'none';
            $("#foto_text").val('');
        });
    });
</script>
@endsection
