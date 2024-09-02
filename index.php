<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Early Skills Resume Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/print-js/1.6.0/print.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="icon" type="image/x-icon" href="earlyskills.jpg">
    <style>
        body {
            background-color: #f4f6f8;
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            margin-top: 30px;
        }

        .form-section,
        .preview-section {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-section {
            border-right: 1px solid #e9ecef;
            height: 90vh;
            overflow: auto;
        }

        .preview-section {
            border-left: 1px solid #e9ecef;
        }

        h2 {
            margin-bottom: 20px;
            color: #5a67d8;
            font-weight: 500;
        }

        label {
            font-weight: 500;
        }

        .btn-custom {
            background-color: #5a67d8;
            color: #fff;
            border: none;
        }

        .btn-custom:hover {
            background-color: #434190;
        }

        .header {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 10px;
        }

        .header img {
            width: 80px;
            height: auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header .name h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }

        .header .name p {
            margin: 5px 0 0;
            color: #718096;
        }

        .section-title {
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 2px solid #5a67d8;
            padding-bottom: 5px;
            font-weight: 500;
            color: #2d3748;
        }

        .summary,
        .content,
        .contact-info,
        .languages-info,
        .education-info,
        .experience-info,
        .achievements-info {
            margin-top: 20px;
        }

        .education-detail,
        .experience-detail {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .education-detail textarea,
        .education-detail input,
        .experience-detail textarea {
            margin-right: 10px;
        }

        .education-detail textarea {
            flex: 1;
        }

        @media print {
            body {
                padding: 0;
                background-color: #fff;
            }

            .container {
                margin-top: 0;
                padding: 0;
            }

            .form-section,
            .preview-section {
                box-shadow: none;
                border: none;
                margin: 0;
            }

            .header {
                border-bottom: none;
                padding-bottom: 0;
            }

            .header img {
                width: 60px;
                height: auto;
            }

            .btn-custom {
                display: none;
            }

            .form-group {
                margin-bottom: 10px;
            }
        }

        .language-detail {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .language-detail input,
        .language-detail select {
            flex: 1;
            margin-right: 10px;
        }

        .language-detail select {
            width: auto;
        }

        /* Print styles */
        @media print {
            body {
                padding: 0;
                background-color: #fff;
            }


            .container {
                margin-top: 0;
                padding: 0;
            }

            .form-section,
            .resume-title {
                display: none;
            }

            .resume-preview {
                display: block;
            }

            .header {
                border-bottom: none;
                padding-bottom: 0;
            }

            .header img {
                width: 60px;
                height: auto;
            }

            .btn-custom {
                display: none;
            }

            .form-group {
                margin-bottom: 10px;
            }
        }

        .language-detail {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .language-detail select {
            width: auto;
        }

        .collapseDiv {
            cursor: pointer;
            color: #fff;
            background-color: #5a67d8;
            padding: 4px;
            padding-left: 10px;
            border-radius: 5px;
        }

        .add-more {
            font-size: 12px;
            padding: 5px 10px;
            margin-top: 5px;
        }

        .add-more:hover {
            color: #fff;
        }

        .language-detail {
            margin-bottom: 1rem;
        }

        @media (max-width: 767px) {
            .form-check-inline {
                display: block;
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mb-4">
                <div class="form-section">
                    <h2>Early Skills Resume Builder</h2>
                    <form id="resumeForm">
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="email@example.com">
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone" placeholder="+91 XXXXXXXXXX">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address"
                                placeholder="123 Main Street, City, Country">
                        </div>
                        <div class="form-group mb-3">
                            <label for="summary">Summary <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="summary" rows="4"
                                placeholder="Brief summary about yourself"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="languages">Languages <span class="text-danger">*</span></label>
                            <div id="languageSection" class="row">
                                <div class="language-detail col-12 mb-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Language"
                                                name="language[]">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="readCheck"
                                                    value="Read" name="proficiency[]">
                                                <label class="form-check-label" for="readCheck">Read</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="writeCheck"
                                                    value="Write" name="proficiency[]">
                                                <label class="form-check-label" for="writeCheck">Write</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="speakCheck"
                                                    value="Speak" name="proficiency[]">
                                                <label class="form-check-label" for="speakCheck">Speak</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-custom add-more" id="addLanguage">Add More <i
                                    class="fa fa-plus"></i></button>
                        </div>
                        <div class="form-group mb-3">
                            <label for="education">Education <span class="text-danger">*</span></label>
                            <div id="educationSection">
                                <div class="education-detail">
                                    <input type="text" id="educationDegree" class="form-control mt-2"
                                        placeholder="Degree">
                                    <input type="text" id="educationInstitution" class="form-control mt-2"
                                        placeholder="Institution">
                                    <input type="text" id="educationYear" class="form-control mt-2" placeholder="Year">
                                </div>
                            </div>
                            <button type="button" class="btn btn-custom add-more" id="addEducation">Add More
                                <i class="fa fa-plus"></i></button>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 bg collapseDiv mb-2" data-bs-toggle="collapse"
                            href="#experienceDetail" aria-expanded="false" aria-controls="experienceDetail">
                            Add Experience <i class="fa fa-plus"></i>
                        </div>
                        <div class="collapse multi-collapse" id="experienceDetail">
                            <div class="form-group mb-3">
                                <label for="experience">Experience</label>
                                <div id="experienceSection">
                                    <div class="experience-detail">
                                        <input type="text" id="experienceDegree" class="form-control mt-2"
                                            placeholder="Title">
                                        <input type="text" id="experienceInstitution" class="form-control mt-2"
                                            placeholder="Company">
                                        <input type="text" id="experienceDate" class="form-control mt-2"
                                            placeholder="Date">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-custom add-more" id="addExperience">Add More
                                    <i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 bg collapseDiv mb-2" data-bs-toggle="collapse"
                            href="#achievementDetail" aria-expanded="false" aria-controls="achievementDetail">
                            Add Achievements <i class="fa fa-plus"></i>
                        </div>
                        <div class="collapse multi-collapse" id="achievementDetail">
                            <div class="form-group mb-3">
                                <label for="achievements">Achievements</label>
                                <textarea class="form-control" id="achievements" rows="3"
                                    placeholder="Award for Best Web Developer, ABC Company, 2022"></textarea>
                                <button type="button" class="btn btn-custom add-more" id="addAchievement">Add More
                                    <i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-4">
                <h2 class="resume-title">Resume Preview <button type="button" class="btn btn-custom" id="printButton"
                        onclick="window.print()">Print
                        Resume</button></h2>
                <div class="preview-section">
                    <div id="resumePreview">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            const $form = $('#resumeForm');
            const $educationSection = $('#educationSection');
            const $experienceSection = $('#experienceSection');
            const $languageSection = $('#languageSection');
            const $resumePreview = $('#resumePreview');
            const $achievementsSection = $('#achievementsSection');

            function updatePreview() {
                const name = $('#name').val() || 'Your Name';
                const email = $('#email').val() || 'email@example.com';
                const phone = $('#phone').val() || '+91 XXXXXXXXXX';
                const address = $('#address').val() || '123 Main Street, City, Country';
                const summary = $('#summary').val() || 'Brief summary about yourself';

                const languages = $languageSection.find('.language-detail').map(function () {
                    const $this = $(this);
                    const language = $this.find('input[type="text"]').val().trim();
                    const proficiencies = $this.find('input[type="checkbox"]:checked').map(function () {
                        return $(this).val();
                    }).get();

                    return language && proficiencies.length > 0 ? `<strong>${language}:</strong> ${proficiencies.join(', ')}` : '';
                }).get().filter(Boolean).join('<br>');

                const education = $educationSection.find('.education-detail').map(function () {
                    const $this = $(this);
                    const degree = $this.find('input:nth-child(1)').val();
                    const institution = $this.find('input:nth-child(2)').val();
                    const year = $this.find('input:nth-child(3)').val();

                    return degree ? `<strong>${degree}</strong>${institution ? `, ${institution}` : ''}${year ? ` (${year})` : ''}` : '';
                }).get().filter(Boolean).join('<br>');

                const experience = $experienceSection.find('.experience-detail').map(function () {
                    const $this = $(this);
                    const title = $this.find('input:nth-child(1)').val();
                    const company = $this.find('input:nth-child(2)').val();
                    const dates = $this.find('input:nth-child(3)').val();

                    return title ? `<strong>${title}</strong>${company ? `, ${company}` : ''}${dates ? ` (${dates})` : ''}` : '';
                }).get().filter(Boolean).join('<br>');

                const achievements = $('#achievements').val().split('\n').filter(Boolean).map(item => `<li>${item}</li>`).join('');

                $resumePreview.html(`
                <div class="header">
                    <div class="name">
                        <h1><b>${name}</b></h1>
                        <p>${email} | Mobile: ${phone}</p>
                        <p>${address}</p>
                    </div>
                    <div>
                        <img src="earlyskills.jpg" alt="Profile Image" />
                    </div>
                </div>
                <div class="summary">
                    <div class="section-title">Summary</div>
                    <p>${summary}</p>
                </div>
                <div class="languages-info">
                    <div class="section-title">Languages</div>
                    <p>${languages}</p>
                </div>
                <div class="education-info">
                    <div class="section-title">Education</div>
                    <p>${education}</p>
                </div>
                ${experience ? `<div class="experience-info">
                    <h2 class="section-title">Experience</h2>
                    ${experience}
                </div>` : ''}
                ${achievements ? `<div class="achievements-info">
                    <h2 class="section-title">Achievements</h2>
                    ${achievements}
                </div>` : ''}
            `);
            }

            let languageCounter = 0;

            $('#addLanguage').on('click', function () {
                languageCounter++;
                const newLanguage = $(`
                <div class="language-detail col-12 mb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Language" name="language[]">
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="readCheck${languageCounter}" value="Read" name="proficiency[]">
                                <label class="form-check-label" for="readCheck${languageCounter}">Read</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="writeCheck${languageCounter}" value="Write" name="proficiency[]">
                                <label class="form-check-label" for="writeCheck${languageCounter}">Write</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="speakCheck${languageCounter}" value="Speak" name="proficiency[]">
                                <label class="form-check-label" for="speakCheck${languageCounter}">Speak</label>
                            </div>
                        </div>
                    </div>
                </div>
            `);
                $('#languageSection').append(newLanguage);
            });

            $('#addEducation').on('click', function () {
                const newEducation = $(`
                <div class="education-detail">
                    <input type="text" id="educationDegree" class="form-control mt-2" placeholder="Degree">
                    <input type="text" class="form-control mt-2" placeholder="Institution">
                    <input type="text" class="form-control mt-2" placeholder="Year">
                </div>
            `);
                $educationSection.append(newEducation);
            });

            $('#addExperience').on('click', function () {
                const newExperience = $(`
                <div class="experience-detail">
                    <input type="text" id="experienceDegree" class="form-control mt-2" placeholder="Title">
                    <input type="text" id="experienceInstitution" class="form-control mt-2" placeholder="Company">
                    <input type="text" id="experienceDate" class="form-control mt-2" placeholder="Date">
                </div>
            `);
                $experienceSection.append(newExperience);
            });

            $('#addAchievement').on('click', function () {
                const newAchievement = $(`
                <div class="achievement-detail">
                    <textarea class="form-control" rows="2" placeholder="Achievement"></textarea>
                </div>
            `);
                $achievementsSection.append(newAchievement);
            });

            $form.on('input', updatePreview);
            updatePreview();

            $('#printButton').on('click', function () {
                printJS({
                    printable: 'resumePreview',
                    type: 'html',
                    targetStyles: ['*'],
                    style: `
                    @media print {
                        .header img {
                            width: 60px;
                        }
                    }
                `
                });
            });
        });
    </script>
</body>
</html>