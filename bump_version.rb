# just bumps the version of the project, by default does a minor bump
# puts package_file[2]
# puts style_file[2]


def bump_version
  package_lines = File.readlines('package.json')
  current_version = package_lines[2].split(':')[1].split('"')[1].split('.')
  (major, minor, patch) = current_version
  minor = minor.to_i
  minor = minor + 1
  
  new_version = "#{major}.#{minor}.#{patch}"
  package_lines[2] = "  \"version\": \"#{new_version}\",\n"
  File.open('package.json', 'w') { |f| f.write(package_lines.join) }

  style_lines = File.readlines('style.scss')
  style_lines[2] = "Version: #{new_version}\n"
  File.open('style.scss', 'w') { |f| f.write(style_lines.join) }
end

bump_version
