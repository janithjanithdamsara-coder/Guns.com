<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(45deg, #0d6efd, #0a58ca);
            padding: 20px;
        }
        .section-title {
            color: #0d6efd;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 10px;
            margin-bottom: 25px;
            margin-top: 10px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .input-group-text {
            background-color: #f8f9fa;
            color: #0d6efd;
            border-right: none;
        }
        .form-control, .form-select {
            border-left: none;
        }
        .form-control:focus, .form-select:focus {
            box-shadow: none;
            border-color: #ced4da;
            border-left: 1px solid #ced4da; /* Restore border on focus if needed or keep hidden */
        }
        /* Fix input group border when focused */
        .input-group:focus-within .input-group-text {
            border-color: #86b7fe;
        }
        .input-group:focus-within .form-control, 
        .input-group:focus-within .form-select {
            border-color: #86b7fe;
            border-left: none;
        }

        .photo-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border: 1px dashed #ced4da;
        }
        .photo-preview {
            width: 160px;
            height: 160px;
            border: 4px solid #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 50%; /* Circular photo */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: #e9ecef;
            margin-bottom: 15px;
        }
        .photo-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .photo-preview i {
            font-size: 4rem;
            color: #adb5bd;
        }
        .required::after {
            content: " *";
            color: #dc3545;
            font-weight: bold;
        }
        .btn-register {
            padding: 12px;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: all 0.3s;
        }
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="card shadow-lg">
                    <div class="card-header text-white text-center">
                        <h3 class="mb-0"><i class="bi bi-person-lines-fill me-2"></i> Student Registration</h3>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <form id="studentForm" method="POST" enctype="multipart/form-data">
                            
                            <h5 class="section-title"><i class="bi bi-person-circle"></i> A. Personal Details</h5>
                            
                            <div class="row g-3 mb-4">
                                <div class="col-md-12">
                                    <label for="fullName" class="form-label required">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control" id="fullName" name="full_name" placeholder="Enter student's full name" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="dob" class="form-label required">Date of Birth</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-calendar-date"></i></span>
                                        <input type="date" class="form-control" id="dob" name="date_of_birth" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label required">Gender</label>
                                    <div class="d-flex align-items-center h-100 p-2 border rounded bg-light">
                                        <div class="form-check form-check-inline ms-2">
                                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                                            <label class="form-check-label" for="male"><i class="bi bi-gender-male text-primary"></i> Male</label>
                                        </div>
                                        <div class="form-check form-check-inline ms-3">
                                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                                            <label class="form-check-label" for="female"><i class="bi bi-gender-female text-danger"></i> Female</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="school" class="form-label">School</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-building"></i></span>
                                        <input type="text" class="form-control" id="school" name="school" placeholder="Current School Name">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="address" class="form-label">Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                        <textarea class="form-control" id="address" name="address" rows="2" placeholder="Home Address"></textarea>
                                    </div>
                                </div>
                            </div>

                            <h5 class="section-title"><i class="bi bi-telephone-fill"></i> B. Contact Information</h5>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label for="studentPhone" class="form-label">Student Phone (SMS)</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-phone"></i></span>
                                        <input type="tel" class="form-control" id="studentPhone" name="student_phone" placeholder="07xxxxxxxx">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="parentPhone" class="form-label required">Parent Phone (Emergency)</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-people-fill"></i></span>
                                        <input type="tel" class="form-control" id="parentPhone" name="parent_phone" placeholder="07xxxxxxxx" required>
                                    </div>
                                </div>
                            </div>

                            <h5 class="section-title"><i class="bi bi-mortarboard-fill"></i> C. Academic Information</h5>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label for="regNumber" class="form-label">Registration Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-card-heading"></i></span>
                                        <input type="text" class="form-control fw-bold text-primary" id="regNumber" name="reg_number" 
                                               value="ST<?php echo date('Y') . '001'; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="stream" class="form-label">Stream</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-book"></i></span>
                                        <select class="form-select" id="stream" name="stream">
                                            <option value="" selected>Select Stream</option>
                                            <option value="Bio">Bio Science</option>
                                            <option value="Maths">Physical Science (Maths)</option>
                                            <option value="Tech">Technology</option>
                                            <option value="Art">Arts</option>
                                            <option value="Commerce">Commerce</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="batch" class="form-label">Batch (Exam Year)</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                                        <select class="form-select" id="batch" name="batch">
                                            <option value="" selected>Select Batch</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <h5 class="section-title"><i class="bi bi-camera-fill"></i> D. Student Photo</h5>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="photo-wrapper">
                                        <div class="photo-preview" id="photoPreview">
                                            <i class="bi bi-person-bounding-box"></i>
                                        </div>
                                        <div class="input-group w-auto">
                                            <input class="form-control" type="file" id="photo" name="photo" accept="image/*" onchange="previewPhoto(event)">
                                        </div>
                                        <div class="form-text mt-2 text-center">Max size: 2MB. Format: JPG/PNG.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-register btn-lg">
                                    <i class="bi bi-check-circle-fill me-2"></i> Register Student
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function previewPhoto(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('photoPreview');
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" alt="Student Photo">`;
                };
                reader.readAsDataURL(file);
            } else {
                preview.innerHTML = '<i class="bi bi-person-bounding-box"></i>';
            }
        }
    </script>
</body>
</html>