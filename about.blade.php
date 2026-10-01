@extends('layouts.app')

@section('title', 'เกี่ยวกับเรา - Laravel EBD Project')

@section('content')
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body p-4">
        <h2 class="card-title text-primary mb-3">เกี่ยวกับโครงการนี้</h2>
        <p class="lead text-secondary">
            เว็บแอปพลิเคชันนี้จัดทำขึ้นเพื่อการเรียนรู้และทดสอบการใช้งานโครงสร้าง Blade Template ในระบบ Laravel Framework
        </p>
        <hr class="my-4">

        <h4 class="fw-bold mb-3">วัตถุประสงค์การใช้งาน</h4>
        <ul class="list-group list-group-numbered mb-4">
            <li class="list-group-item">ศึกษาโครงสร้างการจัดวางไฟล์ Template ในโปรเจกต์ Laravel</li>
            <li class="list-group-item">ฝึกฝนการใช้งาน Directive `@extends`, `@section`, และ `@yield`</li>
            <li class="list-group-item">ฝึกการส่งค่า Parameter จาก `routes/web.php` มายังไฟล์ View</li>
            <li class="list-group-item">ประยุกต์ใช้ Bootstrap CSS ร่วมกับส่วนประกอบต่างๆ ของเว็บไซต์</li>
        </ul>

        <h4 class="fw-bold mb-3">ข้อมูลผู้พัฒนาโครงการ</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อ - นามสกุล</th>
                        <th scope="col">ตำแหน่งหน้าที่</th>
                        <th scope="col">สถานะ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>นักศึกษาผู้พัฒนาโปรเจกต์</td>
                        <td>Full Stack Developer</td>
                        <td><span class="badge bg-success">Active</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>อาจารย์ผู้สอนประจำวิชา</td>
                        <td>Project Advisor</td>
                        <td><span class="badge bg-info">Supervisor</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>