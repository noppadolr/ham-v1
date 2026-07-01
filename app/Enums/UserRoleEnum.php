<?php

declare(strict_types=1);

namespace App\Enums;

enum UserRoleEnum: string
{
    case Admin = 'admin';
    case Executive = 'executive';
    case Procurement = 'procurement';
    case BiomedicalEngineer = 'biomedical_engineer';
    case MedicalEquipmentCenter = 'medical_equipment_center';
    case DepartmentHead = 'department_head';
    case DepartmentStaff = 'department_staff';
    case Technician = 'technician';

    public function label(): string
    {
        return match ($this) {
            self::Admin => 'ผู้ดูแลระบบ',
            self::Executive => 'ผู้บริหาร',
            self::Procurement => 'พัสดุ',
            self::BiomedicalEngineer => 'วิศวกรรมการแพทย์',
            self::MedicalEquipmentCenter => 'ศูนย์เครื่องมือแพทย์',
            self::DepartmentHead => 'หัวหน้าหน่วยงาน',
            self::DepartmentStaff => 'เจ้าหน้าที่หน่วยงาน',
            self::Technician => 'ช่าง',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::Admin => 'red',
            self::Executive => 'purple',
            self::Procurement => 'blue',
            self::BiomedicalEngineer => 'green',
            self::MedicalEquipmentCenter => 'cyan',
            self::DepartmentHead => 'amber',
            self::DepartmentStaff => 'zinc',
            self::Technician => 'orange',
        };
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->map(fn (self $role) => [
                'value' => $role->value,
                'label' => $role->label(),
            ])
            ->all();
    }
}
