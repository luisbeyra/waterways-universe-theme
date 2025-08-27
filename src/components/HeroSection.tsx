import { Link } from 'react-router-dom';
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';
import { Play, Gamepad2, BookOpen, GraduationCap } from 'lucide-react';
import heroBackground from '@/assets/hero-background.jpg';
import waterwaysLogo from '@/assets/waterways-logo.png';
import tvShowHero from '@/assets/tv-show-hero.jpg';
import gamesHero from '@/assets/games-hero.jpg';
import graphicNovelHero from '@/assets/graphic-novel-hero.jpg';
import lessonsHero from '@/assets/lessons-hero.jpg';

const HeroSection = () => {
  const heroSections = [
    {
      title: 'TV Show',
      description: 'Experience the sci-fi mystery at Waterways Academy',
      icon: Play,
      image: tvShowHero,
      link: '/tv-show',
      gradient: 'from-primary to-accent'
    },
    {
      title: 'Games',
      description: 'Educational gaming in the mangrove ecosystem',
      icon: Gamepad2,
      image: gamesHero,
      link: '/games',
      gradient: 'from-seaweed to-primary'
    },
    {
      title: 'Graphic Novel',
      description: 'Interactive comic book experience',
      icon: BookOpen,
      image: graphicNovelHero,
      link: '/graphic-novel',
      gradient: 'from-coral to-accent'
    },
    {
      title: 'Lessons',
      description: 'STEM curriculum for the classroom',
      icon: GraduationCap,
      image: lessonsHero,
      link: '/lessons',
      gradient: 'from-accent to-deep-blue'
    }
  ];

  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden">
      {/* Background Image with Overlay */}
      <div 
        className="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style={{ backgroundImage: `url(${heroBackground})` }}
      >
        <div className="absolute inset-0 bg-background/60 backdrop-blur-sm"></div>
      </div>
      
      {/* Animated Elements */}
      <div className="absolute inset-0">
        {[...Array(20)].map((_, i) => (
          <div
            key={i}
            className="absolute w-2 h-2 bg-primary-glow rounded-full animate-float opacity-30"
            style={{
              left: `${Math.random() * 100}%`,
              top: `${Math.random() * 100}%`,
              animationDelay: `${Math.random() * 4}s`,
              animationDuration: `${3 + Math.random() * 4}s`
            }}
          />
        ))}
      </div>

      {/* Content */}
      <div className="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        {/* Main Heading */}
        <div className="text-center mb-16">
          <img 
            src={waterwaysLogo} 
            alt="Waterways Logo" 
            className="h-24 md:h-32 mx-auto mb-6 animate-slide-up"
          />
          <p className="text-xl md:text-2xl text-muted-foreground max-w-3xl mx-auto leading-relaxed animate-slide-up">
            Where Science Fiction Meets STEM Education in the Heart of Florida's Mangrove Ecosystem
          </p>
          <div className="mt-8 flex flex-col sm:flex-row gap-4 justify-center animate-slide-up">
            <Button 
              size="lg"
              className="bg-gradient-ocean hover:shadow-[var(--shadow-glow)] text-lg px-8 py-4 animate-glow"
            >
              <Play className="mr-2" size={20} />
              Watch Trailer
            </Button>
            <Button 
              variant="outline" 
              size="lg"
              className="border-accent text-accent hover:bg-accent hover:text-accent-foreground text-lg px-8 py-4"
            >
              Explore Universe
            </Button>
          </div>
        </div>

        {/* Four Hero Sections Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
          {heroSections.map((section, index) => (
            <Link key={section.title} to={section.link} className="group">
              <Card className="relative overflow-hidden h-80 bg-card/80 backdrop-blur-sm border-border hover:border-accent transition-all duration-500 transform hover:scale-105 hover:shadow-[var(--shadow-card)] animate-slide-up">
                {/* Background Image */}
                <div 
                  className="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                  style={{ backgroundImage: `url(${section.image})` }}
                >
                  <div className={`absolute inset-0 bg-gradient-to-t ${section.gradient} opacity-60 group-hover:opacity-40 transition-opacity duration-500`}></div>
                </div>
                
                {/* Content Overlay */}
                <div className="relative z-10 h-full flex flex-col justify-between p-6">
                  {/* Icon */}
                  <div className="flex justify-center">
                    <div className="w-16 h-16 bg-background/20 backdrop-blur-md rounded-full flex items-center justify-center group-hover:bg-accent/80 transition-all duration-300">
                      <section.icon size={32} className="text-foreground group-hover:text-accent-foreground" />
                    </div>
                  </div>
                  
                  {/* Text Content */}
                  <div className="text-center">
                    <h3 className="text-2xl font-bold text-foreground mb-2 group-hover:text-accent transition-colors duration-300">
                      {section.title}
                    </h3>
                    <p className="text-muted-foreground group-hover:text-foreground transition-colors duration-300">
                      {section.description}
                    </p>
                  </div>
                  
                  {/* Hover Effect Border */}
                  <div className="absolute inset-0 border-2 border-transparent group-hover:border-accent transition-colors duration-300 rounded-lg"></div>
                </div>
              </Card>
            </Link>
          ))}
        </div>

        {/* Additional Info */}
        <div className="text-center mt-16 animate-slide-up">
          <p className="text-lg text-muted-foreground">
            A groundbreaking series featuring guest experts, interactive curriculum, and immersive gaming experiences
          </p>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;