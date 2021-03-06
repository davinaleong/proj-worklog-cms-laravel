@extends('layouts.app')

@section('content')
<!-- Content Row -->
<div class="row">

    <!-- Work Log Card -->
    <div class="col-12">

        <div class="card border-left-primary shadow mb-4 worklog-card">
            <form class="card-body" method="POST" action="">

                <!-- Day-Task Header -->
                <div class="row no-gutters align-items-center">
                    <div class="col">

                        <!-- Note Alert -->
                        <div class="alert alert-primary">
                            <i class="fas fa-exclamation-triangle"></i> You are editing an <strong>existing</strong> work-log entry.
                        </div>

                        <!-- Work Log Tags -->
                        <div class="d-flex align-items-center mb-1">
                            <div class="text-xs font-weight-bold text-seconary text-uppercase mr-1">
                                <i class="fas fa-fw fa-pen"></i> EDITING
                            </div>

                            <div class="text-xs font-weight-bold text-info text-uppercase mx-1">
                                <i class="fas fa-fw fa-hashtag"></i> LOG 11
                            </div>
                        </div>

                        <!-- Work Log Title -->
                        <div class="col">
                            <div class="form-group">
                                <label for="title">
                                    Title <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="title" class="form-control form-control-lg" placeholder="Title *"
                                       value="Week 11" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Entry List Group -->
                <ul class="list-group">
                    <!-- Entry #0 (count: 1) -->
                    <li class="list-group-item">
                        <div class="d-flex align-items-center mb-1">
                            <div class="text-xs font-weight-bold text-seconary text-uppercase">
                                ENTRY #1
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="entry[0][title]">Day Title <span class="text-danger">*</span></label>
                                    <input type="text" name="entry[0][title]" class="form-control"
                                           placeholder="Entry Title" value="May 31" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="entry[0][type]">Day-Type <span class="text-danger">*</span></label>
                                    <select name="entry[0][type]" class="form-control" required>
                                        <option value="">- Select Day-type -</option>
                                        <option value="W">Work Day</option>
                                        <option value="M" selected>Medical Leave</option>
                                        <option value="A">Annual Leave</option>
                                        <option value="P">Public Holiday</option>
                                        <option value="O">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Entry Line Items (Tasks) Table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <label>
                                            Project Code <span class="text-danger">*</span>
                                        </label>
                                    </th>
                                    <th>
                                        <label>
                                            Task Item <span class="text-danger">*</span>
                                        </label>
                                    </th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Item #0 (count: 1) -->
                                <tr>
                                    <td>
                                        <select name="entry[0][item][0][project_code]"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO" selected>SSO</option>
                                            <option value="PROJ">Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry[0][item][0][title]"
                                               class="form-control form-control-sm"
                                               value="Started on #61" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry[0][item][0][cancel]"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #1 (count: 2) -->
                                <tr>
                                    <td>
                                        <select name="entry0-item1-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO" selected>SSO</option>
                                            <option value="PROJ">Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry0-item1-title"
                                               class="form-control form-control-sm" value="Minor bug fixes on #60"
                                               required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry0-item1-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #2 (count: 3) -->
                                <tr>
                                    <td>
                                        <select name="entry0-item2-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK" selected>Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ">Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry0-item2-title"
                                               class="form-control form-control-sm"
                                               value="Assisted in testing mobile apps"
                                               required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry0-item2-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #3 (count: 4) -->
                                <tr>
                                    <td>
                                        <select name="entry0-item3-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO" selected>SSO</option>
                                            <option value="PROJ">Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry0-item3-title"
                                               class="form-control form-control-sm"
                                               value="Researched on `schema.org`"
                                               required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry0-item3-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #4 (count: 5) -->
                                <tr>
                                    <td>
                                        <select name="entry0-item4-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO" selected>SSO</option>
                                            <option value="PROJ">Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry0-item4-title"
                                               class="form-control form-control-sm"
                                               value="Researched on Google Rich Snippets"
                                               required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry0-item4-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-link text-primary">
                                            <i class="fas fa-fw fa-plus"></i></button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </li>
                    <!-- Entry #1 (count: 2) -->
                    <li class="list-group-item">
                        <div class="d-flex align-items-center mb-1">
                            <div class="text-xs font-weight-bold text-seconary text-uppercase">
                                ENTRY #2
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="entry1-title">Day Title <span class="text-danger">*</span></label>
                                    <input type="text" name="entry1-title" class="form-control"
                                           placeholder="Entry Title" value="May 30" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="entry1-type">Day-Type <span class="text-danger">*</span></label>
                                    <select name="entry1-type" class="form-control" required>
                                        <option value="">- Select Day-type -</option>
                                        <option value="W">Work Day</option>
                                        <option value="M" selected>Medical Leave</option>
                                        <option value="A">Annual Leave</option>
                                        <option value="P">Public Holiday</option>
                                        <option value="O">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Entry Items (Tasks) Table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <label>
                                            Project Code <span class="text-danger">*</span>
                                        </label>
                                    </th>
                                    <th>
                                        <label>
                                            Task Item <span class="text-danger">*</span>
                                        </label>
                                    </th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Item #0 (count: 1) -->
                                <tr>
                                    <td>
                                        <select name="entry1-item0-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ">Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others" selected>Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry1-item0-title"
                                               class="form-control form-control-sm"
                                               value="Style examples" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry1-item0-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #1 (count: 2) -->
                                <tr>
                                    <td>
                                        <select name="entry1-item1-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ" selected>Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry1-item1-title"
                                               class="form-control form-control-sm"
                                               value="Task item" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry1-item1-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #2 (count: 3) -->
                                <tr>
                                    <td>
                                        <select name="entry1-item2-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ" selected>Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry1-item2-title"
                                               class="form-control form-control-sm"
                                               value="#issue-no" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry1-item2-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #3 (count: 4) -->
                                <tr>
                                    <td>
                                        <select name="entry1-item3-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ">Personal Project</option>
                                            <option value="PROTO" selected>Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry1-item3-title"
                                               class="form-control form-control-sm"
                                               value="Added `User` Module" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry1-item3-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #4 (count: 5) -->
                                <tr>
                                    <td>
                                        <select name="entry1-item4-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ">Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others" selected>Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry1-item4-title"
                                               class="form-control form-control-sm"
                                               value="Miscellaneous items with no direct relations to projects"
                                               required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry1-item4-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-link text-primary">
                                            <i class="fas fa-fw fa-plus"></i></button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </li>
                    <!-- Entry #2 (count: 3) -->
                    <li class="list-group-item">
                        <div class="d-flex align-items-center mb-1">
                            <div class="text-xs font-weight-bold text-seconary text-uppercase">
                                ENTRY #3
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="entry2-title">Day Title <span class="text-danger">*</span></label>
                                    <input type="text" name="entry2-title" class="form-control"
                                           placeholder="Entry Title" value="May 28" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="entry2-type">Day-Type <span class="text-danger">*</span></label>
                                    <select name="entry2-type" class="form-control" required>
                                        <option value="">- Select Day-type -</option>
                                        <option value="W">Work Day</option>
                                        <option value="M" selected>Medical Leave</option>
                                        <option value="A">Annual Leave</option>
                                        <option value="P">Public Holiday</option>
                                        <option value="O">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Entry Items (Tasks) Table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <label>
                                            Project Code <span class="text-danger">*</span>
                                        </label>
                                    </th>
                                    <th>
                                        <label>
                                            Task Item <span class="text-danger">*</span>
                                        </label>
                                    </th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Item #0 (count: 1) -->
                                <tr>
                                    <td>
                                        <select name="entry2-item0-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ" selected>Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry2-item0-title"
                                               class="form-control form-control-sm"
                                               value="Task item" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry2-item0-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #1 (count: 2) -->
                                <tr>
                                    <td>
                                        <select name="entry2-item1-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ" selected>Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry2-item1-title"
                                               class="form-control form-control-sm"
                                               value="Task item" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry2-item1-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #2 (count: 3) -->
                                <tr>
                                    <td>
                                        <select name="entry2-item2-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ" selected>Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry2-item2-title"
                                               class="form-control form-control-sm"
                                               value="Task item" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry2-item2-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-link text-primary">
                                            <i class="fas fa-fw fa-plus"></i></button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </li>
                    <!-- Entry #3 (count: 4) -->
                    <li class="list-group-item">
                        <div class="d-flex align-items-center mb-1">
                            <div class="text-xs font-weight-bold text-seconary text-uppercase">
                                ENTRY #4
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="entry3-title">Day Title <span class="text-danger">*</span></label>
                                    <input type="text" name="entry3-title" class="form-control"
                                           placeholder="Entry Title" value="May 28" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="entry3-type">Day-Type <span class="text-danger">*</span></label>
                                    <select name="entry3-type" class="form-control" required>
                                        <option value="">- Select Day-type -</option>
                                        <option value="W">Work Day</option>
                                        <option value="M" selected>Medical Leave</option>
                                        <option value="A">Annual Leave</option>
                                        <option value="P">Public Holiday</option>
                                        <option value="O">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Entry Items (Tasks) Table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <label>
                                            Project Code <span class="text-danger">*</span>
                                        </label>
                                    </th>
                                    <th>
                                        <label>
                                            Task Item <span class="text-danger">*</span>
                                        </label>
                                    </th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Item #0 (count: 1) -->
                                <tr>
                                    <td>
                                        <select name="entry3-item0-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ" selected>Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry3-item0-title"
                                               class="form-control form-control-sm"
                                               value="Task item" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry3-item0-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #1 (count: 2) -->
                                <tr>
                                    <td>
                                        <select name="entry3-item1-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ" selected>Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry3-item1-title"
                                               class="form-control form-control-sm"
                                               value="Task item" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry3-item1-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #2 (count: 3) -->
                                <tr>
                                    <td>
                                        <select name="entry3-item2-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ" selected>Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry3-item2-title"
                                               class="form-control form-control-sm"
                                               value="Task item" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry3-item2-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-link text-primary">
                                            <i class="fas fa-fw fa-plus"></i></button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </li>
                    <!-- Entry #4 (count: 5) -->
                    <li class="list-group-item">
                        <div class="d-flex align-items-center mb-1">
                            <div class="text-xs font-weight-bold text-seconary text-uppercase">
                                ENTRY #5
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="entry4-title">Day Title <span class="text-danger">*</span></label>
                                    <input type="text" name="entry4-title" class="form-control"
                                           placeholder="Entry Title" value="May 28" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="entry4-type">Day-Type <span class="text-danger">*</span></label>
                                    <select name="entry4-type" class="form-control" required>
                                        <option value="">- Select Day-type -</option>
                                        <option value="W">Work Day</option>
                                        <option value="M" selected>Medical Leave</option>
                                        <option value="A">Annual Leave</option>
                                        <option value="P">Public Holiday</option>
                                        <option value="O">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Entry Items (Tasks) Table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <label>
                                            Project Code <span class="text-danger">*</span>
                                        </label>
                                    </th>
                                    <th>
                                        <label>
                                            Task Item <span class="text-danger">*</span>
                                        </label>
                                    </th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Item #0 (count: 1) -->
                                <tr>
                                    <td>
                                        <select name="entry4-item0-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ" selected>Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry4-item0-title"
                                               class="form-control form-control-sm"
                                               value="Task item" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry4-item0-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #1 (count: 2) -->
                                <tr>
                                    <td>
                                        <select name="entry4-item1-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ" selected>Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry4-item1-title"
                                               class="form-control form-control-sm"
                                               value="Task item" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry4-item1-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Item #2 (count: 3) -->
                                <tr>
                                    <td>
                                        <select name="entry4-item2-project_code"
                                                class="form-control form-control-sm" required>
                                            <option value="">- Select Project Code</option>
                                            <option value="KLICK">Klick</option>
                                            <option value="SSO">SSO</option>
                                            <option value="PROJ" selected>Personal Project</option>
                                            <option value="PROTO">Prototype / Proof-of-Concept</option>
                                            <option value="LEARN">Learning</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="entry4-item2-title"
                                               class="form-control form-control-sm"
                                               value="Task item" required>
                                    </td>
                                    <td>
                                        <button type="button" name="entry4-item2-cancel"
                                                class="btn btn-sm btn-link text-danger">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-link text-primary">
                                            <i class="fas fa-fw fa-plus"></i></button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </li>
                </ul>

                <!-- Form Actions -->
                <div class="mt-3 text-right">
                    <button type="button" class="btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-check fa-sm"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-sm btn-link text-secondary">
                        <i class="fas fa-trash-alt fa-sm"></i> Cancel
                    </button>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection
