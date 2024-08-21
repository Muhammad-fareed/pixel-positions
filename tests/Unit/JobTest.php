<?php

use App\Models\Job;
use App\Models\Employer;

it('belong to an employer', function () {
    // Testing Process AAA

    // 1 Arrange the world
    $employer = Employer::factory()->create();
    $jobs = Job::factory()->create([
        "employer_id" => $employer->id
    ]);
    // 2 Act
    expect($jobs->employer->is($employer))->toBeTrue();
    // 3 Assert
});

it('belong to an Jobs', function () {
    // Testing Process AAA

    // 1 Arrange the world
    $jobs = Job::factory()->create();

    $jobs->tag('Frontend');
    // 2 Act
    expect($jobs->tags)->toHaveCount(1);
    // 3 Assert
});
