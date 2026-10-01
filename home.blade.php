@extends('layouts.app')

@section('title', 'หน้าแรก - Laravel EBD Project')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 shadow-sm border">
    <div class="container-fluid py-2">
        <h1 class="display-5 fw-bold text-primary">ระบบการเรียนรู้ Laravel</h1>
        <p class="col-md-10 fs-4 text-secondary">
            นี่คือตัวอย่างหน้าแรก (Home Page) ที่ถูกสร้างโดยการสืบทอดเทมเพลตมาจาก Master Layout
        </p>
        <a class="btn btn-primary btn-lg mt-2" href="/about" role="button">
            อ่านรายละเอียดเกี่ยวกับระบบ
        </a>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
    <div class="col">
        <div class="card h-100 border-primary shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-primary">การใช้งาน Layout</h5>
                <p class="card-text">
                    ช่วยลดความซ้ำซ้อนของการเขียนโค้ด HTML เช่น Header และ Footer ทำให้สามารถจัดการหน้าเว็บทั้งหมดได้จากจุดเดียว
                </p>
            </div>
            <div class="card-footer bg-transparent border-top-0">
                <span class="badge bg-info text-dark">Feature 01</span>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card h-100 border-success shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-success">ความยืดหยุ่นในการพัฒนา</h5>
                <p class="card-text">
                    Blade Directive ช่วยให้ส่งผ่านเนื้อหาแต่ละหน้าได้อย่างเป็นระเบียบและจัดการง่าย
                </p>
            </div>
            <div class="card-footer bg-transparent border-top-0">
                <span class="badge bg-success">Feature 02</span>
            </div>
        </div>
    </div>
</div>

<div class="alert alert-warning shadow-sm" role="alert">
    <h4 class="alert-heading fw-bold">ข้อแนะนำเพิ่มเติม</h4>
    <p>คุณสามารถคลิกปุ่มหรือลิงก์ใน Navigation ด้านบน เพื่อทดสอบการทำงานของแต่ละหน้าได้อย่างสมบูรณ์</p>
    <hr>
    <p class="mb-0">หากต้องการสอบถามข้อมูลเพิ่มเติม สามารถไปที่หน้า <a href="/contact" class="alert-link">ติดต่อเรา</a></p>
</div>