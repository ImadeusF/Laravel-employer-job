<?php

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('a job belongs to an employer', function () {
    // Arrange
    $employer = Employer::factory()->create();

    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act & Assert
    // need a employer function in the Job Model
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function() {
    // Arrange
    $job = Job::factory()->create();

    // need a tag function in the Job Model
    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});