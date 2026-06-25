Key Features
-Premium Glassmorphic UI: Features a sticky navbar utilizing backdrop-filter blur effects, smooth scroll behaviors, responsive grids, and modern transform hover states.

-Dual-Backend Configurations:

-Serverless Mode (Default): Directly securely connects clients to a cloud hosted Supabase PostgreSQL instance via an injection-safe API layer—completely removing the need for an intermediate server.

-Self-Hosted PHP Mode: An optional relational MySQL database handler script built using structured object-oriented mysqli syntax and robust SQL Injection defense layers (mysqli_real_escape_string).

-Production Fluidity: Standardized global margins ensure content never clips past screen boundaries on mobile, tablet, or high-definition desktop monitors.
Technology Stack
-Frontend: HTML5, CSS3 (Advanced Flexbox & Grid), JavaScript (ES6+)

-Database Mode A: Supabase Client SDK (Cloud PostgreSQL)

-Database Mode B: PHP 8.x, Native MySQLi (Local Apache Stack / XAMPP)
Installation & Configuration
-- Using the Supabase Cloud Backend (Default)
To connect your contact form directly to a live PostgreSQL cloud database with zero server management overhead, update the inline script block near the bottom of index.html:
// Initialize Supabase Client
const SUPABASE_URL = 'https://your-project-id.supabase.co';
const SUPABASE_KEY = 'your-anon-publishable-key';
Required PostgreSQL Database Schema
Execute the following query inside your Supabase SQL Editor to initialize the target storage table:
create table contact_submissions (
  id bigint generated always as identity primary key,
  created_at timestamp with time zone default timezone('utc'::text, now()) not null,
  user_name text not null,
  user_email text not null,
  user_message text not null
);
Modifying Visual Style Rules
All stylistic properties are located in style.css. The primary visual design system relies on a clean, modern lavender accent color palette. You can easily global-swap themes by altering these main declaration hooks:
/* Update your Primary Palette Branding Accent colors easily */
.logo, .cta-btn, .submit-btn {
    background: #6c5ce7; /* Swap to your choice theme hex value */
}
