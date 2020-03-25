<?php

class PatientContr extends PatientModel{
  public function createForcesPatient($force, $first, $last, $nic, $force_id, $regiment, $rank, $email, $dob, $height, $weight, $address, $mobile){
    $this->setForcesPatient($force, $first, $last, $nic, $force_id, $regiment, $rank, $email, $dob, $height, $weight, $address, $mobile);
  }
  public function createFamilyPatient($force_id, $force, $relation, $first, $last, $nic, $email, $dob, $height, $weight, $address, $mobile){
    $this->setFamilyPatient($force_id, $force, $relation, $first, $last, $nic, $email, $dob, $height, $weight, $address, $mobile);
  }

  public function createNewRecord($nic, $doa, $reason, $history, $cm, $doctor, $ward){
    $this->setNewRecord($nic, $doa, $reason, $history, $cm, $doctor, $ward);
  }

  public function createMedicalRecord($force_id, $nic, $date, $serializedPersonalHistory, $serializedHospitalTreatments, $otherInfo, $summary, $serializedEyes, $serializedEarsNoseThroat, $serializedUpperLimbsLocomotion, $serializedPhysicalCapacityObject, $serializedMentalCapacity, $serializedForm10, $serializedSpecialistReportObject){
    $this->setMedicalRecord($force_id, $nic, $date, $serializedPersonalHistory, $serializedHospitalTreatments, $otherInfo, $summary, $serializedEyes, $serializedEarsNoseThroat, $serializedUpperLimbsLocomotion, $serializedPhysicalCapacityObject, $serializedMentalCapacity, $serializedForm10, $serializedSpecialistReportObject);
  }

  public function changeDoctor($nic, $doctor, $doa){
    $this->setNewDoctor($nic, $doctor, $doa);
  }


}
