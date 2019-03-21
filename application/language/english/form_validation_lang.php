<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2018, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']				= 'Paramater <b>{field}</b> Harus di Isi!.';
$lang['form_validation_isset']					= 'Parameter <b>{field}</b> Harus Memiliki Nilai.';
$lang['form_validation_valid_email']			= 'Paramater <b>{field}</b> Tidak Valid!.';
$lang['form_validation_valid_emails']			= 'Parameter <b>{field}</b> Harus Berisi Semua Alamat Email Yg Valid.';
$lang['form_validation_valid_url']				= 'Parameter <b>{field}</b> Harus Berisi URL Yang Valid.';
$lang['form_validation_valid_ip']				= 'Parameter <b>{field}</b> Harus Berisi Alamat IP Yang Valid.';
$lang['form_validation_min_length']				= 'Parameter <b>{field}</b> Harus Memilik Nilai Minimal {param} Karakter.';
$lang['form_validation_max_length']				= 'Parameter <b>{field}</b> Harus Memilik Nilai Maximal {param} Karakter.';
$lang['form_validation_exact_length']			= 'The <b>{field}</b> field must be exactly {param} characters in length.';
$lang['form_validation_alpha']					= 'The <b>{field}</b> field may only contain alphabetical characters.';
$lang['form_validation_alpha_numeric']			= 'The <b>{field}</b> field may only contain alpha-numeric characters.';
$lang['form_validation_alpha_numeric_spaces']	= 'The <b>{field}</b> field may only contain alpha-numeric characters and spaces.';
$lang['form_validation_alpha_dash']		= 'The <b>{field}</b> field may only contain alpha-numeric characters, underscores, and dashes.';
$lang['form_validation_numeric']				= 'Paramater <b>{field}</b> Harus Berisi Angka.';
$lang['form_validation_is_numeric']				= 'The <b>{field}</b> field must contain only numeric characters.';
$lang['form_validation_integer']				= 'The <b>{field}</b> field must contain an integer.';
$lang['form_validation_regex_match']			= 'The <b>{field}</b> field is not in the correct format.';
$lang['form_validation_matches']				= 'The <b>{field}</b> field does not match the {param} field.';
$lang['form_validation_differs']				= 'The <b>{field}</b> field must differ from the {param} field.';
$lang['form_validation_is_unique'] 				= '<b>{field}</b> Sudah Tersedia, Gunakan <b>{field}</b> Lain.';
$lang['form_validation_is_natural']				= 'The {field} field must only contain digits.';
$lang['form_validation_is_natural_no_zero']		= 'The {field} field must only contain digits and must be greater than zero.';
$lang['form_validation_decimal']				= 'The {field} field must contain a decimal number.';
$lang['form_validation_less_than']				= 'The {field} field must contain a number less than {param}.';
$lang['form_validation_less_than_equal_to']		= 'The {field} field must contain a number less than or equal to {param}.';
$lang['form_validation_greater_than']			= 'The {field} field must contain a number greater than {param}.';
$lang['form_validation_greater_than_equal_to']	= 'The {field} field must contain a number greater than or equal to {param}.';
$lang['form_validation_error_message_not_set']	= 'Unable to access an error message corresponding to your field name {field}.';
$lang['form_validation_in_list']				= 'The {field} field must be one of: {param}.';
