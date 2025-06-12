<?php
// Include header component
include 'components/layout/header.php';
?>



<section class="profile-section container">
    <!-- Mobile Toggle Button -->
    <button class="mobile-toggle d-md-none" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>

    <div class="profile-container">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <img id="sidebar-avatar" class="user-avatar" src="" alt="User Avatar">
                <div class="user-name">John Doe</div>
                <div class="user-email">john.doe@example.com</div>
            </div>

            <nav class="sidebar-nav">
                <div class="nav-item">
                    <a href="#account" class="nav-link active" onclick="showSection('account', this)">
                        <i class="fas fa-user"></i>
                        My Account
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#orders" class="nav-link" onclick="showSection('orders', this)">
                        <i class="fas fa-shopping-bag"></i>
                        Orders
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#wishlist" class="nav-link" onclick="showSection('wishlist', this)">
                        <i class="fas fa-heart"></i>
                        Wishlist
                    </a>
                </div>
                <div class="nav-item logout-link">
                    <a href="#logout" class="nav-link" onclick="handleLogout()">
                        <i class="fas fa-sign-out-alt"></i>
                        Log Out
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Account Section -->
            <div id="account-section" class="content-section">
                <div class="content-header">
                    <h1 class="content-title">My Account</h1>
                    <p class="content-subtitle">Manage your account settings and personal information</p>
                </div>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #22c55e, #059669);">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-number">24</div>
                        <div class="stat-label">Total Orders</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="stat-number">12</div>
                        <div class="stat-label">Wishlist Items</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #c0c0c0, #a0a0a0);">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="stat-number">4.8</div>
                        <div class="stat-label">Rating</div>
                    </div>
                </div>

                <div class="content-section">
                    <div class="section-header">
                        <h3 class="section-title">
                            <i class="fas fa-user-edit"></i>
                            Personal Information
                        </h3>
                    </div>
                    <div class="section-content">
                        <form id="profile-form" enctype="multipart/form-data">
                            <div class="upload-img-container">
                                <div class="form-group profile-photo-upload">
                                    <img id="profile-photo-preview" class="profile-photo-preview" src=""
                                        alt="Profile Photo Preview">
                                    <div class="upload-area"><i class="fas fa-cloud-upload-alt"></i></div>
                                    <div class="upload-instructions">Click to upload or drag & drop PNG or JPEG</div>
                                    <input type="file" id="profile-photo" accept="image/png,image/jpeg">
                                    <div id="photo-error" class="error-message"></div>
                                </div>
                                <div class="upload-actions">
                                    <button type="button" class="btn-cancel" onclick="cancelUpload()">Cancel</button>
                                    <button type="submit" class="btn-primary">Save</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="firstName" value="John">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="lastName" value="Doe">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" value="john.doe@example.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" value="+1 (555) 123-4567">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>
                                Update Profile
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Orders Section -->
            <div id="orders-section" class="content-section" style="display: none;">
                <div class="content-header">
                    <h1 class="content-title">My Orders</h1>
                    <p class="content-subtitle">Track and manage your order history</p>
                </div>

                <div class="content-section">
                    <div class="section-header">
                        <h3 class="section-title">
                            <i class="fas fa-list"></i>
                            Recent Orders
                        </h3>
                    </div>
                    <div class="section-content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Date</th>
                                        <th>Items</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="Product"><img class="table-img" src="./utilities/cam.png"
                                                alt="product"></td>
                                        <td data-label="Date"> 2024-06-10 </td>
                                        <td data-label="Items">3 items</td>
                                        <td data-label="Total" style="text-align: right;">$299.99</td>
                                        <td data-label="Status"><span
                                                class="status-badge status-active">Delivered</span></td>
                                        <td data-label="Action">
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="Product"><img class="table-img" src="./utilities/hanafia.png"
                                                alt="product"></td>
                                        <td data-label="Date">2024-06-08</td>
                                        <td data-label="Items">1 item</td>
                                        <td data-label="Total" style="text-align: right;">$149.99</td>
                                        <td data-label="Status"><span
                                                class="status-badge status-pending">Processing</span></td>
                                        <td data-label="Action">
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wishlist Section -->
            <div id="wishlist-section" class="content-section" style="display: none;">
                <div class="content-header">
                    <h1 class="content-title">My Wishlist</h1>
                    <p class="content-subtitle">Items you've saved for later</p>
                </div>

                <div class="content-section">
                    <div class="section-header">
                        <h3 class="section-title">
                            <i class="fas fa-heart"></i>
                            Saved Items
                        </h3>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-4">
                                <?php
                                // Include card component
                                include 'components/shared/card.php';
                                ?>

                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <?php
                                // Include card component
                                include 'components/shared/card.php';
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    // Profile Photo Upload Handling
    const profilePhotoInput = document.getElementById('profile-photo');
    const profilePhotoPreview = document.getElementById('profile-photo-preview');
    const sidebarAvatar = document.getElementById('sidebar-avatar');
    const photoError = document.getElementById('photo-error');
    const profileForm = document.getElementById('profile-form');

    profilePhotoInput.addEventListener('change', handlePhotoUpload);
    profilePhotoInput.addEventListener('dragenter', (e) => {
        e.preventDefault();
        profilePhotoInput.parentElement.classList.add('dragover');
    });
    profilePhotoInput.addEventListener('dragover', (e) => {
        e.preventDefault();
        profilePhotoInput.parentElement.classList.add('dragover');
    });
    profilePhotoInput.addEventListener('dragleave', () => {
        profilePhotoInput.parentElement.classList.remove('dragover');
    });
    profilePhotoInput.addEventListener('drop', (e) => {
        e.preventDefault();
        profilePhotoInput.parentElement.classList.remove('dragover');
        profilePhotoInput.files = e.dataTransfer.files;
        handlePhotoUpload();
    });

    function handlePhotoUpload() {
        const file = profilePhotoInput.files[0];
        photoError.style.display = 'none';
        const uploadInstructions = document.querySelector('.upload-instructions');

        if (file) {
            if (!['image/png', 'image/jpeg'].includes(file.type)) {
                photoError.textContent = 'Please upload a PNG or JPEG image.';
                photoError.style.display = 'block';
                profilePhotoInput.value = '';
                profilePhotoPreview.src = '';
                sidebarAvatar.src = '';
                profilePhotoPreview.style.display = 'none';
                uploadInstructions.style.opacity = '1';
                return;
            }

            if (file.size > 5 * 1024 * 1024) {
                photoError.textContent = 'Image size must be less than 5MB.';
                photoError.style.display = 'block';
                profilePhotoInput.value = '';
                profilePhotoPreview.src = '';
                sidebarAvatar.src = '';
                profilePhotoPreview.style.display = 'none';
                uploadInstructions.style.opacity = '1';
                return;
            }

            const reader = new FileReader();
            reader.onload = (e) => {
                profilePhotoPreview.src = e.target.result;
                sidebarAvatar.src = e.target.result;
                profilePhotoPreview.style.display = 'block';
                uploadInstructions.style.opacity = '0';
            };
            reader.readAsDataURL(file);
        }
    }

    function cancelUpload() {
        profilePhotoInput.value = '';
        profilePhotoPreview.src = '';
        sidebarAvatar.src = '';
        profilePhotoPreview.style.display = 'none';
        photoError.style.display = 'none';
        document.querySelector('.upload-instructions').style.opacity = '1';
    }

    profileForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(profileForm);
        if (profilePhotoInput.files.length === 0 && profilePhotoPreview.src === '') {
            alert('Please upload a profile photo or fill out the form.');
            return;
        }
        console.log('Form submitted with data:', {
            firstName: formData.get('firstName'),
            lastName: formData.get('lastName'),
            email: formData.get('email'),
            phone: formData.get('phone'),
            photo: profilePhotoInput.files[0]
        });
        alert('Profile updated successfully!');
    });

    function showSection(sectionName, element) {
        const sections = ['account', 'orders', 'wishlist'];
        sections.forEach(section => {
            const sectionElement = document.getElementById(section + '-section');
            if (sectionElement) {
                sectionElement.style.display = 'none';
            }
        });

        const targetSection = document.getElementById(sectionName + '-section');
        if (targetSection) {
            targetSection.style.display = 'block';
        }

        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => link.classList.remove('active'));
        element.classList.add('active');

        if (window.innerWidth <= 768) {
            document.getElementById('sidebar').classList.remove('active');
        }
    }

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }

    function handleLogout() {
        if (confirm('Are you sure you want to log out?')) {
            alert('Logged out successfully!');
        }
    }

    document.addEventListener('click', function (event) {
        const sidebar = document.getElementById('sidebar');
        const toggle = document.querySelector('.mobile-toggle');

        if (window.innerWidth <= 768 &&
            !sidebar.contains(event.target) &&
            !toggle.contains(event.target)) {
            sidebar.classList.remove('active');
        }
    });

    window.addEventListener('resize', function () {
        const sidebar = document.getElementById('sidebar');
        if (window.innerWidth > 768) {
            sidebar.classList.remove('active');
        }
    });
</script>


<?php
// Include footer component
include 'components/layout/footer.php';
?>