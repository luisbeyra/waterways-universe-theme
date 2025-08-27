import { useState } from 'react';
import { Link, useLocation } from 'react-router-dom';
import { Button } from '@/components/ui/button';
import { Menu, X } from 'lucide-react';
import waterwaysLogo from '@/assets/waterways-logo.png';

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const location = useLocation();

  const navigation = [
    { name: 'Home', href: '/' },
    { name: 'TV Show', href: '/tv-show' },
    { name: 'Games', href: '/games' },
    { name: 'Graphic Novel', href: '/graphic-novel' },
    { name: 'Lessons', href: '/lessons' },
    { name: 'About', href: '/about' },
    { name: 'Contact', href: '/contact' },
  ];

  const isActive = (href: string) => location.pathname === href;

  return (
    <header className="fixed top-0 w-full z-50 bg-background/95 backdrop-blur-md border-b border-border">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center py-4">
          {/* Logo */}
          <Link to="/" className="flex items-center space-x-2 group">
            <img 
              src={waterwaysLogo} 
              alt="Waterways Logo" 
              className="h-8 w-auto transition-all duration-300 group-hover:scale-105"
            />
            <span className="text-xl font-bold bg-gradient-ocean bg-clip-text text-transparent">
              WATERWAYS
            </span>
          </Link>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex items-center space-x-1">
            {navigation.map((item) => (
              <Link
                key={item.name}
                to={item.href}
                className={`px-4 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-card hover:text-accent ${
                  isActive(item.href) 
                    ? 'bg-primary text-primary-foreground shadow-[var(--shadow-glow)]' 
                    : 'text-foreground hover:text-accent'
                }`}
              >
                {item.name}
              </Link>
            ))}
          </nav>

          {/* CTA Button */}
          <div className="hidden md:block">
            <Button variant="default" className="bg-gradient-ocean hover:shadow-[var(--shadow-glow)] transition-all duration-300">
              Watch Trailer
            </Button>
          </div>

          {/* Mobile menu button */}
          <div className="md:hidden">
            <Button
              variant="ghost"
              size="sm"
              onClick={() => setIsMenuOpen(!isMenuOpen)}
              className="text-foreground hover:text-accent"
            >
              {isMenuOpen ? <X size={24} /> : <Menu size={24} />}
            </Button>
          </div>
        </div>
      </div>

      {/* Mobile Navigation Menu */}
      {isMenuOpen && (
        <div className="md:hidden bg-background/98 backdrop-blur-md border-t border-border">
          <div className="px-4 pt-2 pb-4 space-y-1">
            {navigation.map((item) => (
              <Link
                key={item.name}
                to={item.href}
                className={`block px-3 py-2 rounded-md text-base font-medium transition-all duration-300 ${
                  isActive(item.href)
                    ? 'bg-primary text-primary-foreground'
                    : 'text-foreground hover:bg-card hover:text-accent'
                }`}
                onClick={() => setIsMenuOpen(false)}
              >
                {item.name}
              </Link>
            ))}
            <div className="pt-2">
              <Button 
                variant="default" 
                className="w-full bg-gradient-ocean hover:shadow-[var(--shadow-glow)] transition-all duration-300"
                onClick={() => setIsMenuOpen(false)}
              >
                Watch Trailer
              </Button>
            </div>
          </div>
        </div>
      )}
    </header>
  );
};

export default Header;