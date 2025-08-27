import { Link } from 'react-router-dom';
import { Facebook, Twitter, Instagram, Youtube, Mail, Phone, MapPin } from 'lucide-react';
import waterwaysLogo from '@/assets/waterways-logo.png';
const Footer = () => {
  const socialLinks = [{
    icon: Facebook,
    href: '#',
    label: 'Facebook'
  }, {
    icon: Twitter,
    href: '#',
    label: 'Twitter'
  }, {
    icon: Instagram,
    href: '#',
    label: 'Instagram'
  }, {
    icon: Youtube,
    href: '#',
    label: 'YouTube'
  }];
  return <footer className="bg-card border-t border-border">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {/* Brand Column */}
          <div className="space-y-4">
            <div className="flex items-center space-x-2">
              <img src={waterwaysLogo} alt="Waterways Logo" className="h-11 w-auto" />
              
            </div>
            <p className="text-muted-foreground text-sm leading-relaxed">
              A revolutionary sci-fi series set in a fictional Florida K-12 school, 
              seamlessly integrating entertainment with STEM education.
            </p>
            <div className="flex space-x-4">
              {socialLinks.map(social => <a key={social.label} href={social.href} className="text-muted-foreground hover:text-accent transition-colors duration-300 hover:scale-110 transform" aria-label={social.label}>
                  <social.icon size={20} />
                </a>)}
            </div>
          </div>

          {/* Educational Partners */}
          <div>
            <h3 className="text-lg font-semibold mb-4 text-foreground">Educational</h3>
            <ul className="space-y-2 text-sm">
              <li>
                <span className="text-muted-foreground">Academica Partnership</span>
              </li>
              <li>
                <span className="text-muted-foreground">STEM Curriculum</span>
              </li>
              <li>
                <span className="text-muted-foreground">Colēgia Platform</span>
              </li>
              <li>
                <span className="text-muted-foreground">Classroom Resources</span>
              </li>
            </ul>
          </div>

          {/* Contact Info */}
          <div>
            <h3 className="text-lg font-semibold mb-4 text-foreground">Contact</h3>
            <div className="space-y-3 text-sm">
              <div className="flex items-center space-x-2 text-muted-foreground">
                <Mail size={16} />
                <span>info@waterwaysmiami.com</span>
              </div>
              <div className="flex items-center space-x-2 text-muted-foreground">
                <Phone size={16} />
                <span>+1 (305) 555-0123</span>
              </div>
              <div className="flex items-center space-x-2 text-muted-foreground">
                <MapPin size={16} />
                <span>Miami-Dade County, Florida</span>
              </div>
            </div>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="mt-8 pt-8 border-t border-border flex flex-col sm:flex-row justify-between items-center">
          <p className="text-muted-foreground text-sm">
            © {new Date().getFullYear()} Waterways Miami. All rights reserved.
          </p>
          <div className="flex space-x-6 mt-4 sm:mt-0">
            <Link to="/privacy" className="text-muted-foreground hover:text-accent text-sm transition-colors duration-300">
              Privacy Policy
            </Link>
            <Link to="/terms" className="text-muted-foreground hover:text-accent text-sm transition-colors duration-300">
              Terms of Service
            </Link>
          </div>
        </div>
      </div>
    </footer>;
};
export default Footer;