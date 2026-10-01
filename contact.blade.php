@extends('layouts.app')

@section('title', 'ติดต่อเรา - Laravel EBD Project')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white p-3">
        <h3 class="card-title mb-0 h4">แบบฟอร์มการติดต่อสอบถาม</h3>
    </div>
    <div class="card-body p-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="fullname" class="form-label fw-bold">ชื่อ - นามสกุล <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="กรอกชื่อและนามสกุล" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold">อีเมลสำหรับติดต่อ <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label fw-bold">หัวข้อที่ต้องการติดต่อ <span class="text-danger">*</span></label>
                <select class="form-select" id="subject" name="subject" required>
                    <option value="" selected disabled>-- กรุณาเลือกหัวข้อ --</option>
                    <option value="general">สอบถามข้อมูลทั่วไป</option>
                    <option value="bug">แจ้งปัญหาการใช้งานระบบ</option>
                    <option value="other">เรื่องอื่นๆ</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label fw-bold">รายละเอียดข้อความ <span class="text-danger">*</span></label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="ระบุข้อความของคุณที่นี่..." required></textarea>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <button type="reset" class="btn btn-secondary">ล้างข้อมูล</button>
                <button type="submit" class="btn btn-primary px-4">ส่งข้อความ</button>
            </div>
        </form>
    </div>
</div>
@endsection