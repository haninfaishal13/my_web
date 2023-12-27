inquiryData();

async function inquiryData() {
    showLoading();
    // profile
    const profile = await getProfileData();
    // education
    const education = await getEducationData(profile.data.id);
    // contact
    const contact = await getContactData(profile.data.id);
    console.log(contact);
    // skill
    const softskill = await getSoftskillData(profile.data.id);
    const hardskill = await getHardskillData(profile.data.id);
    const language = await getLanguageskillData(profile.data.id);
    // link
    const link = await getLinkData(profile.data.id);
    hideLoading();
    // const link = await
    if(profile.data) {
        document.getElementById('position').value = profile.data.position;
        document.getElementById('description').value = profile.data.description;
        document.getElementById('city').value = profile.data.city;
        document.getElementById('nation').value = profile.data.nation;
        if(profile.data.user) {
            document.getElementById('full_name').value = profile.data.user.name;
            document.getElementById('email').value = profile.data.user.email;
        }
    }
    if(hardskill.data.skill.length > 0) {
        let html = '';
        document.getElementById("hardskill-form").innerHTML = "";
        for(let i=0 ; i<hardskill.data.skill.length ; i++) {
            const data = hardskill.data.skill[i];
            html += setSkillField(data, 'Hardskill');
        }
        document.getElementById("hardskill-form").innerHTML = html;
    }
    if(softskill.data.skill.length > 0) {
        let html = '';
        document.getElementById("softskill-form").innerHTML = '';
        for(let i=0 ; i<softskill.data.skill.length ; i++) {
            const data = softskill.data.skill[i];
            html += setSkillField(data, 'Softskill');
        }
        document.getElementById("softskill-form").innerHTML = html;
    }
    if(language.data.skill.length > 0) {
        let html = ''
        document.getElementById("language-form").innerHTML = '';
        for(let i = 0 ; i<language.data.skill.length ; i++) {
            const data = language.data.skill[i];
            html += setSkillField(data, 'Language');
        }
        document.getElementById("language-form").innerHTML = html;
    }
    const link_category = link.data.category;
    if(link.data.link.length > 0) {
        let html = '';
        document.getElementById("link-form").innerHTML = '';
        for(let i=0 ; i<link.data.link.length ; i++) {
            const data = link.data.link[i];
            html += setLinkField(data, link_category);
        }
        document.getElementById("link-form").innerHTML = html;
    } else {
        let category_html = '';
        for(let i=0 ; i<link_category.length ; i++) {
            category_html += `
                <option value="${link_category[i].id}">
                    ${link_category[i].url_category_type}
                </option>
            `
        }
        document.getElementsByClassName('link-profile-url-category-id')[0].innerHTML = category_html;
    }
    const contact_category = contact.data.category;
    if(contact.data.link.length > 0) {
        let html = ''
        document.getElementById('contact-form').innerHTML = '';
        for(let i=0 ; i<contact.data.link.length ; i++) {
            const data = contact.data.link[i];
            html += setContactField(data, contact_category);
        }
        document.getElementById('contact-form').innerHTML = html;
    } else {
        let category_html = '';
        for(let i=0 ; i<contact_category.length ; i++) {
            category_html += `
                <option value="${contact_category[i].id}">
                    ${contact_category[i].url_category_type}
                </option>
            `
        }
        document.getElementsByClassName('socmed-type')[0].innerHTML = category_html;
    }
    if(education.data.length > 0) {
        let html = '';
        document.getElementById('education-form').innerHTML = '';
        for(let i=0 ; i<education.data.length ; i++) {
            const data = education.data[i];
            html += setEducationField(data);
        }
        document.getElementById('education-form').innerHTML = html;
    }
}
function setSkillField (data, className) {
    const lowerClassName = className.toLowerCase();
    const html = `
    <div class="card ${lowerClassName} mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-10">
                    <div class="row mb-3">
                        <div class="col-4">${className}:</div>
                        <div class="col-8">
                            <input type="text" name="skill_name[]" class="form-control ${lowerClassName}-name" data-name="skill_name" value=${data.skill_name}>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">Proficiency</div>
                        <div class="col-8">
                            <select name="skill_prof[]" class="form-control ${lowerClassName}-mastery" data-name="skill_mastery">
                                <option value="1" ${data.skill_mastery == 1 ? 'selected' : ''}>Novice</option>
                                <option value="2" ${data.skill_mastery == 2 ? 'selected' : ''}>Intermediate</option>
                                <option value="3" ${data.skill_mastery == 3 ? 'selected' : ''}>Advance</option>
                                <option value="4" ${data.skill_mastery == 4 ? 'selected' : ''}>Expert</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-primary btn-sm btn-${lowerClassName}-remove">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    `
    return html;
}
function setLinkField(data, category) {
    let category_html = ''
    for(let i=0 ; i<category.length ; i++) {
        category_html += `
            <option value="${category[i].id}"
                ${category[i].id == data.profile_url_category_id ? 'selected' : ''}>
                ${category[i].url_category_type}
            </option>
        `
    }
    const html = `
    <div class="card repo mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-10">
                    <div class="row mb-3">
                        <div class="col-4">
                            Type:
                        </div>
                        <div class="col-8">
                            <select name="repo_type_url[]" id="type_url" class="form-control link-profile-url-category-id" data-name="profile_url_category_id">
                                ${category_html}
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">Url</div>
                        <div class="col-8">
                            <input type="text" name="repo_url[]" class="form-control link-url-path" data-name="url_path" value="${data.url_path}">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-primary btn-sm btn-repo-remove">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    `
    return html
}
function setContactField(data, category) {
    let category_html = '';
    for(let i=0 ; i<category.length ; i++) {
        category_html += `
            <option value="${category[i].id}"
                ${category[i].id == data.profile_url_category_id ? 'selected' : ''}
            >
                ${category[i].url_category_type}
            </option>
        `
    }
    const html = `
        <div class="card socmed mb-3">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-4">
                        <select name="socmed_type" class="form-control socmed-type contact-profile-url-category-id" data-name="profile_url_category_id">
                            ${category_html}
                        </select>
                    </div>
                    <div class="col-7">
                        <input type="text" name="sucmed_url" class="form-control socmed-url contact-url-path" data-name="url_path" placeholder="Input Url Here" value="${data.url_path}">
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-danger btn-sm btn-socmed-remove"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    `
    return html;
}
function setEducationField(data) {
    let html = `
        <div class="card education mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-11">
                        <div class="row mb-3">
                            <div class="col-4">
                                School:
                            </div>
                            <div class="col-8">
                                <input type="text" name="place[]" class="form-control education-place" placeholder="School/University Place" value="${data.place}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">Major</div>
                            <div class="col-8">
                                <input type="text" name="major[]" class="form-control education-major" placeholder="Major" data-name="major" value="${data.major}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="d-flex">
                                    Title:
                                    <input type="text" name="title[]" class="form-control ms-2 education-title" placeholder="Title" value="${data.title}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex">
                                    Start Date:
                                    <input type="date" name="start_date[]" class="form-control education-start-date" value="${data.start_date}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex">
                                    End Date:
                                    <input type="date" name="end_date[]" class="form-control education-finish-date" value="${data.finish_date}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-primary btn-sm btn-education-remove">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `
    return html;
}
async function getProfileData() {
    const url = base_url + '/backsite/profile/profileData';
    let resp;
    const profile = await fetch(url, {
        method: 'get'
    });
    if(profile.ok) {
        resp = profile.json();
    }
    return resp;
}

async function getSoftskillData(profile_id) {
    const url = base_url + `/backsite/profile/skillData?profile_id=${profile_id}&skill_type=softskill`;
    let resp;
    const softskill = await fetch(url, {
        method: 'get'
    })
    if(softskill.ok) {
        resp = softskill.json()
    }
    return resp
}

async function getHardskillData(profile_id) {
    const url = base_url + `/backsite/profile/skillData?profile_id=${profile_id}&skill_type=hardskill`;
    let resp
    const hardskill = await fetch(url, {
        method: 'get'
    })
    if(hardskill.ok) {
        resp = hardskill.json();
    }
    return resp;
}

async function getLanguageskillData(profile_id) {
    let resp;
    const url = base_url + `/backsite/profile/skillData?profile_id=${profile_id}&skill_type=language`;
    const language = await fetch(url, {
        method: 'get'
    })
    if(language.ok) {
        resp = language.json();
    }
    return resp;
}

async function getLinkData(profile_id) {
    let resp;
    const url = base_url + `/backsite/profile/linkData?profile_id=${profile_id}&url_type=link`;
    const link = await fetch(url, {
        method: 'get'
    });
    if(link.ok) {
        resp = link.json();
    }
    return resp;
}

async function getContactData(profile_id) {
    let resp;
    const url = base_url + `/backsite/profile/linkData?profile_id=${profile_id}&url_type=socmed`
    const contact = await fetch(url, {
        method: 'get'
    });
    if(contact.ok) {
        resp = contact.json();
    }
    return resp;
}
async function getEducationData(profile_id) {
    let resp;
    const url = base_url + `/backsite/profile/educationData?profile_id=${profile_id}`;
    const education = await fetch(url, {
        method: 'get'
    });
    if(education.ok) {
        resp = education.json();
    }
    return resp;
}
const btn_save = document.getElementById('btn-save');
btn_save.addEventListener('click', () => {
    const formData = new FormData();
    collectProfileData(formData);
    collectEducationData(formData);
    collectPortofolioData(formData);
    collectContactData(formData);
    collectLinkData(formData);
    collectSoftskillData(formData);
    collectHardskillData(formData);
    collectLanguageskillData(formData);
    formData.append('_token', token);
    const url = base_url + '/backsite/profile';
    showLoading();
    fetch(url, {
        headers: {
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: formData,
    })
    .then((response) => {
        hideLoading();
        if(response.ok) {
            return response.json();
        }
        return response.text().then(text => {throw new Error(text)})
    })
    .then((data) => {
        console.log(data);
        swal.fire("Sukses", data.message, "success");
    })
})

function storeProfileData(formData) {
    const profileForm = document.getElementById('profile-form')
    let profileFormData = new FormData(profileForm)
    profileFormData.append('type', 'profile');
    storeData(profileFormData)
}

function storeEducationData() {
    const educationForm = document.getElementById('education-form')
    let educationFormData = new FormData(educationForm)
    educationFormData.append('type', 'education');
    storeData(educationFormData)
}

function storeData(formData) {
    const url = base_url + '/backsite/profile';
    fetch(url, {
        headers: {
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: formData
    })
    .then((response) => {
        if(response.ok) {
            return response.json();
        }
        return response.text().then(text => {throw new Error(text)})
    })
    .then((data) => {

    })
}

function collectProfileData(formData) {
    const full_name = document.getElementById('full_name').value;
    const position = document.getElementById('position').value;
    const description = document.getElementById('description').value;
    const city = document.getElementById('city').value;
    const nation = document.getElementById('nation').value;
    formData.append('full_name', full_name);
    formData.append('position', position);
    formData.append('description', description);
    formData.append('city', city);
    formData.append('nation', nation);
    return;
}

function collectPortofolioData(formData) {
    const portofolio_name = document.getElementsByClassName('portofolio-name');
    const portofolio_media = document.getElementsByClassName('portofolio-media');
    const portofolio_description = document.getElementsByClassName('portofolio-media');
    let arr_data = [];
    for(let i=0 ; i< portofolio_name.length ; i++) {
        const data = {
            portofolio_name: portofolio_name[i],
            portofolio_media: portofolio_media[i],
            portofolio_description: portofolio_description[i]
        }
        arr_data.push(data);
    }
    formData.append('portofolio', arr_data);
}

function collectEducationData(formData) {
    const place = document.getElementsByClassName('education-place');
    const major = document.getElementsByClassName('education-major');
    const title = document.getElementsByClassName('education-title');
    const start_date = document.getElementsByClassName('education-start-date');
    const finish_date = document.getElementsByClassName('education-finish-date');
    let arr_data = []
    for(let i=0; i<place.length; i++) {
        let tmp = {};
        tmp.place = place[i].value;
        tmp.major = major[i].value;
        tmp.title = title[i].value;
        tmp.start_date = start_date[i].value;
        tmp.finish_date = finish_date[i].value;
        arr_data.push(tmp);
    }
    console.log("education", arr_data)
    formData.append("education[]", arr_data);
    return arr_data;
}

function collectContactData(formData) {
    const contact_category = document.getElementsByClassName('contact-profile-url-category-id');
    const contact_url = document.getElementsByClassName('contact-url-path');
    let arr_data = [];
    for(let i=0; i<contact_category.length; i++) {
        let tmp = {};
        tmp.profile_url_category_id = contact_category[i].value;
        tmp.url_path = contact_url[i].value;
        arr_data.push(tmp);
    }
    formData.append("contact", arr_data);
    return arr_data;
}

function collectLinkData(formData) {
    const link_category = document.getElementsByClassName('link-profile-url-category-id');
    const link_url = document.getElementsByClassName('link-url-path');
    let arr_data = [];
    for(let i=0; i<link_category.length; i++) {
        let tmp = {};
        tmp.profile_url_category_id = link_category[i].value;
        tmp.url_path = link_url[i].value;
        arr_data.push(tmp);
    }
    formData.append('link', arr_data);
    return arr_data;
}

function collectSoftskillData(formData) {
    const softskill_name = document.getElementsByClassName('softskill-name');
    const softskill_mastery = document.getElementsByClassName('softskill-mastery');
    let arr_data = [];
    for(let i=0; i<softskill_name.length; i++) {
        let tmp = {};
        tmp.skill_name = softskill_name[i].value;
        tmp.skill_mastery = softskill_mastery[i].value;
        arr_data.push(tmp);
    }
    formData.append('softskill', arr_data)
    return arr_data;
}

function collectHardskillData(formData) {
    const hardskill_name = document.getElementsByClassName('hardskill-name');
    const hardskill_mastery = document.getElementsByClassName('hardskill-mastery');
    let arr_data = [];
    for(let i=0; i<hardskill_name.length; i++) {
        let tmp = {};
        tmp.skill_name = hardskill_name[i].value;
        tmp.skill_mastery = hardskill_mastery[i].value;
        arr_data.push(tmp);
    }
    formData.append("hardskill", formData);
    return arr_data;
}

function collectLanguageskillData() {
    const language_name = document.getElementsByClassName('language-name');
    const language_mastery = document.getElementsByClassName('language-mastery');
    let arr_data = [];
    for(let i=0; i<language_name.length; i++) {
        let tmp = [];
        tmp.skill_name = language_name[i].value;
        tmp.skill_mastery = language_mastery[i].value;
        arr_data.push(tmp);
    }
    return arr_data;
}
