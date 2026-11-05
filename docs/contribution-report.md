# Contribution Report: Student Management System

**Course unit:** BUC3131 (Laravel group coursework)
**Repository:** https://github.com/graciousjr28-coder/student-management-system-AWAD
**Workflow:** `main` (stable), `develop` (integration), one `feature/*` branch per task, pull requests (PRs) with review.

## 1. Group members

| Member | Registration no. | GitHub identity |
|---|---|---|
| Bikaba Grace (repository owner) | 24/U/23891/PS | graciousjr28-coder |
| Bwoye Canan | 24/U/23914/PS | commits under the name "bwoye canan" |
| Obwangole Edwin Opeded | 24/U/19629/PS | edwinobwangole956-pixel commit under the name "edwen opeded"|

## 2. Summary of contributions

| Member | Assigned work | Branches | PRs opened | PRs reviewed | Commits (from GitHub) |
|---|---|---|---|---|---|
| Bikaba Grace | Setup, Blade layout and navigation, registrations and student portal, README, screenshots, this report | `feature/blade-layout`, `feature/registrations-portal`, `feature/documentation` | 10 all PRs into `develop` | 2 | 20 on `main` excluding merges (31 on his profile including merges) |
| Bwoye Canan | Q1 database and relationships, Q2 seeders, lecturer view, user access | `feature/database-seeders`, `feature/lecturer-user-access` | 0 | Most of the reviews | At least 4 (lecturer and user access controllers), plus the Q1/Q2 database work |
| Edwin Opeded | Q3 authentication, roles and permissions, student and course CRUD, dashboard | `feature/auth-roles-permissions`, `feature/student-course-crud` | 0 | none recorded | 3 (2 on authentication, roles and routes; 1 on student and course CRUD) |

## 3. Commits seen in the GitHub history

| Commit | Author name | Work |
|---|---|---|
| f6b797e, a6ea327 | edwinobwangole956-pixel | Authentication, role middleware, routes and controller shells (Q3) |
| 1b83c9c | edwen opeded | Student and course CRUD controllers and views (Q4a, Q4b, Q5) |
| f5a5640, 072d3ba, a2b5af1, ebd25e3 | bwoye canan | Access controller, lecturer course controller, user access controller, lecturer course view and user access management (Q4d) |
| 598aaaf, 7258d1c | graciousjr28-coder | Main Blade layout, navigation and dashboard view (Q5) |
| 741574a | graciousjr28-coder | Registration and student portal controllers and views (Q4c) |
| 4d84db9, a035ed4 | graciousjr28-coder | Pagination setting and controller tidy-up |
| 16a82e6 | graciousjr28-coder | Merge conflict resolution with `develop` |
| fb435c5 and later | graciousjr28-coder | README, setup steps, login credentials and screenshots (Q6) |

## 4. Pull requests

| PR | Branch to base | Content | Opened by | Merged by |
|---|---|---|---|---|
| #1 | `feature/blade-layout` to `develop` | Blade layout, registrations, portal, lecturer and user access | Bikaba Grace | Bikaba Grace |
| #2 | `feature/student-course-crud` to `develop` | Student, course and dashboard controllers | Bikaba Grace | Bikaba Grace |
| #3, #6, #7 | `feature/auth-roles-permissions` to `develop` | Authentication, roles, permissions, controllers | Bikaba Grace | Bikaba Grace |
| #4 | `feature/blade-layout` to `develop` | Layout updates | Bikaba Grace | Khan-studios-makers account |
| #5, #9 | `feature/documentation` to `develop` | README and documentation | Bikaba Grace | Bikaba Grace |
| #8 | `feature/lecturer-user-access` to `develop` | Lecturer view and user access | Bikaba Grace | Bikaba Grace |
| #10 to #15 | `develop` to `main` | Releases of tested work, README and screenshots | Bikaba Grace | Grace (#10), Khan-studios-makers account (#11, #13, #14), Edwin's account (#12, #15) |

All pull requests into `develop` were opened by Bikaba Grace as the repository owner.

## 5. Code reviews

- **Bwoye Canan** carried out most of the pull request reviews.
- **Bikaba Grace** reviewed 2 pull requests: "Feat: add student, course and dashboard controllers" and "feat: add student and course CRUD controllers and views" (Edwin's work).
- The planned rotation was Edwin reviews Bwoye, Grace reviews Edwin, Bwoye reviews Grace.

## 6. Note on commit authorship
- Bwoye Canan's commits and one of Edwin Opeded's commits appear under their names in the Contributors graph.
- The account **Khan-studios-makers** was signed in on the laptop named "Khan". It made 2 commits (430 additions, 32 deletions) and merged PRs #4, #11, #13 and #14. This account belongs to bwoye canan.

The work done by each member is as stated in sections 2 and 3.

## 7. Problems solved during the project

- **Merge conflicts** in `LecturerCourseController.php`, `StudentController.php` and `UserAccessController.php`. We kept the version with the real code, not the empty shell, and committed the merge.
- **Missing views** (`students._form`, `courses._form`) and an unclosed `@if` in `students/show.blade.php`, fixed so add, edit and show pages work.
- **MySQL failing to start** ("Failed to initialize multi master structures"), repaired without losing data, then `php artisan migrate:fresh --seed` rebuilt the database.
- **Screenshot folder and file names** corrected so the README images display.

## 8. Testing

Tested with `php artisan migrate:fresh --seed`, then logged in as admin, lecturer and student to check role access, CRUD, registrations, duplicate prevention and the 403 page. Screenshots are in `docs/screenshots`.

## 9. Declaration

We confirm that this report is an accurate account of our contributions.

Bikaba Grace: ______  Bwoye Canan: ______  Edwin Opeded: ______
